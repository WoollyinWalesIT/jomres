
<
?
p
h
p

/
*
*

 
*
 
C
o
r
e
 
f
i
l
e
.

 
*

 
*
 
@
a
u
t
h
o
r
 
V
i
n
c
e
 
W
o
o
l
l
 
<
s
a
l
e
s
@
j
o
m
r
e
s
.
n
e
t
>

 
*

 
*
 
@
v
e
r
s
i
o
n
 
J
o
m
r
e
s
 
9
.
1
0
.
0
-
c
h
a
r
l
i
e

 
*

 
*
 
@
c
o
p
y
r
i
g
h
t
	
2
0
0
5
-
2
0
1
8
 
V
i
n
c
e
 
W
o
o
l
l

 
*
 
J
o
m
r
e
s
 
(
t
m
)
 
P
H
P
,
 
C
S
S
 
&
 
J
a
v
a
s
c
r
i
p
t
 
f
i
l
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
 
b
o
t
h
 
M
I
T
 
a
n
d
 
G
P
L
2
 
l
i
c
e
n
s
e
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
t
h
e
 
l
i
c
e
n
s
e
 
t
h
a
t
 
b
e
s
t
 
s
u
i
t
s
 
y
o
u
r
 
p
r
o
j
e
c
t
,
 
a
n
d
 
u
s
e
 
i
t
 
a
c
c
o
r
d
i
n
g
l
y

 
*
*
/


/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

d
e
f
i
n
e
d
(
 
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
'
 
)
 
o
r
 
d
i
e
(
 
'
D
i
r
e
c
t
 
A
c
c
e
s
s
 
t
o
 
t
h
i
s
 
f
i
l
e
 
i
s
 
n
o
t
 
a
l
l
o
w
e
d
.
'
 
)
;

/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


c
l
a
s
s
 
j
9
9
9
9
4
w
e
b
h
o
o
k
_
w
a
t
c
h
e
r

	
{

	
f
u
n
c
t
i
o
n
 
_
_
c
o
n
s
t
r
u
c
t
(
)

	
	
{

	
	
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
 
=
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
m
c
H
a
n
d
l
e
r
'
)
;

	
	
i
f
 
(
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
)

	
	
	
{

	
	
	
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
a
b
l
e
=
f
a
l
s
e
;
 
r
e
t
u
r
n
;

	
	
	
}


 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
u
i
d
 
	
=
 
(
i
n
t
)
g
e
t
_
s
h
o
w
t
i
m
e
(
"
p
r
o
p
e
r
t
y
_
u
i
d
"
)
;

	
	
$
m
a
n
a
g
e
r
_
i
d
 
	
=
 
0
;

	
	
$
a
l
l
_
w
e
b
h
o
o
k
s
 
	
=
 
a
r
r
a
y
(
)
;


	
	
i
f
 
(
$
p
r
o
p
e
r
t
y
_
u
i
d
 
=
=
 
0
 
)
 
{

	
	
	
r
e
t
u
r
n
;

	
	
}

 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
m
a
n
a
g
e
r
_
x
r
e
f
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
p
r
o
p
e
r
t
y
_
m
a
n
a
g
e
r
_
x
r
e
f
'
)
;

 
 
 
 
 
 
 
 

	
	
i
f
 
(
i
s
_
n
u
l
l
(
$
p
r
o
p
e
r
t
y
_
m
a
n
a
g
e
r
_
x
r
e
f
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
m
a
n
a
g
e
r
_
x
r
e
f
 
=
 
b
u
i
l
d
_
p
r
o
p
e
r
t
y
_
m
a
n
a
g
e
r
_
x
r
e
f
_
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
}


	
	
i
f
 
(
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
$
p
r
o
p
e
r
t
y
_
u
i
d
,
 
 
$
p
r
o
p
e
r
t
y
_
m
a
n
a
g
e
r
_
x
r
e
f
)
)
 
{

	
	
	
$
m
a
n
a
g
e
r
_
i
d
 
=
 
(
i
n
t
)
$
p
r
o
p
e
r
t
y
_
m
a
n
a
g
e
r
_
x
r
e
f
[
 
$
p
r
o
p
e
r
t
y
_
u
i
d
 
]
;

	
	
}


	
	
i
f
 
(
 
$
m
a
n
a
g
e
r
_
i
d
 
=
=
 
0
 
)
 
{

	
	
	
r
e
t
u
r
n
;

	
	
}

	
	

	
	
j
r
_
i
m
p
o
r
t
(
"
w
e
b
h
o
o
k
s
"
)
;

	
	
$
w
e
b
h
o
o
k
s
 
=
 
n
e
w
 
w
e
b
h
o
o
k
s
(
$
m
a
n
a
g
e
r
_
i
d
)
;

	
	
$
a
l
l
_
w
e
b
h
o
o
k
s
 
=
 
$
w
e
b
h
o
o
k
s
-
>
g
e
t
_
a
l
l
_
w
e
b
h
o
o
k
s
(
)
;


 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
m
e
s
s
a
g
e
s
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
w
e
b
h
o
o
k
_
m
e
s
s
a
g
e
s
'
)
;

	
	
i
f
 
(
i
s
_
a
r
r
a
y
(
$
w
e
b
h
o
o
k
_
m
e
s
s
a
g
e
s
)
)
 
{

	
	
	
$
w
e
b
h
o
o
k
_
m
e
s
s
a
g
e
s
 
=
 
a
r
r
a
y
_
u
n
i
q
u
e
(
 
$
w
e
b
h
o
o
k
_
m
e
s
s
a
g
e
s
,
 
S
O
R
T
_
R
E
G
U
L
A
R
 
)
;
 
/
/
 
R
e
m
o
v
e
 
d
u
p
l
i
c
a
t
e
 
o
b
j
e
c
t
s

	
	
}

	
	

 
 
 
 
 
 
 
 

	
	
i
f
 
(
!
e
m
p
t
y
(
$
a
l
l
_
w
e
b
h
o
o
k
s
)
 
&
&
 
!
e
m
p
t
y
(
$
w
e
b
h
o
o
k
_
m
e
s
s
a
g
e
s
)
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
l
o
g
g
i
n
g
:
:
l
o
g
_
m
e
s
s
a
g
e
(
"
P
r
e
p
a
r
i
n
g
 
d
e
f
e
r
r
e
d
 
m
e
s
s
a
g
e
s
 
"
 
,
 
'
C
o
r
e
'
,
 
'
D
E
B
U
G
'
 
 
)
;

	
	
	
f
o
r
e
a
c
h
 
(
 
$
a
l
l
_
w
e
b
h
o
o
k
s
 
a
s
 
$
w
e
b
h
o
o
k
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
[
'
w
e
b
h
o
o
k
_
m
e
s
s
a
g
e
s
'
]
 
=
 
$
w
e
b
h
o
o
k
_
m
e
s
s
a
g
e
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
w
e
b
h
o
o
k
[
'
e
n
a
b
l
e
d
'
]
 
=
=
 
t
r
u
e
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
a
t
c
h
e
r
_
a
u
t
h
m
e
t
h
o
d
 
=
 
"
w
a
t
c
h
e
r
_
a
u
t
h
m
e
t
h
o
d
_
p
r
o
c
e
s
s
_
"
.
$
w
e
b
h
o
o
k
[
'
s
e
t
t
i
n
g
s
'
]
[
'
a
u
t
h
m
e
t
h
o
d
'
]
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
T
r
i
g
g
e
r
 
n
u
m
b
e
r
 
0
7
3
1
0
 
i
s
 
f
o
r
 
t
a
s
k
s
 
t
h
a
t
 
*
h
a
v
e
*
 
t
o
 
b
e
 
c
a
r
r
i
e
d
 
o
u
t
 
n
o
w
.
 
0
7
3
2
0
 
i
s
 
f
o
r
 
t
a
s
k
s
 
t
h
a
t
 
c
a
n
 
b
e
 
d
e
f
e
r
r
e
d
 
s
l
i
g
h
t
l
y

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
l
o
g
g
i
n
g
:
:
l
o
g
_
m
e
s
s
a
g
e
(
"
L
o
o
k
i
n
g
 
f
o
r
 
j
0
7
3
1
0
"
.
$
w
a
t
c
h
e
r
_
a
u
t
h
m
e
t
h
o
d
,
 
'
W
e
b
h
o
o
k
s
'
,
 
'
D
E
B
U
G
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
e
v
e
n
t
S
p
e
c
i
f
i
c
l
y
E
x
i
s
t
s
C
h
e
c
k
(
 
'
0
7
3
1
0
'
,
 
$
w
a
t
c
h
e
r
_
a
u
t
h
m
e
t
h
o
d
 
)
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
l
o
g
g
i
n
g
:
:
l
o
g
_
m
e
s
s
a
g
e
(
"
S
t
a
r
t
i
n
g
 
c
a
l
l
 
t
o
 
a
u
t
h
m
e
t
h
o
d
 
"
.
$
w
e
b
h
o
o
k
[
'
s
e
t
t
i
n
g
s
'
]
[
'
u
r
l
'
]
,
 
'
W
e
b
h
o
o
k
s
'
,
 
'
D
E
B
U
G
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
s
p
e
c
i
f
i
c
E
v
e
n
t
(
'
0
7
3
1
0
'
,
 
$
w
a
t
c
h
e
r
_
a
u
t
h
m
e
t
h
o
d
,
 
$
w
e
b
h
o
o
k
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
j
r
_
i
m
p
o
r
t
(
'
j
o
m
r
e
s
_
d
e
f
e
r
r
e
d
_
t
a
s
k
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
d
e
f
e
r
r
e
d
_
t
a
s
k
s
 
=
 
n
e
w
 
j
o
m
r
e
s
_
d
e
f
e
r
r
e
d
_
t
a
s
k
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
d
e
f
e
r
r
e
d
_
t
a
s
k
s
-
>
c
o
n
s
t
r
u
c
t
_
b
a
c
k
g
r
o
u
n
d
_
m
e
s
s
a
g
e
(
 
"
0
7
3
2
0
"
 
,
 
$
w
a
t
c
h
e
r
_
a
u
t
h
m
e
t
h
o
d
 
,
 
s
e
r
i
a
l
i
z
e
(
$
w
e
b
h
o
o
k
)
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
d
e
f
e
r
r
e
d
_
t
a
s
k
s
-
>
d
i
s
p
a
t
c
h
_
m
e
s
a
g
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

	
	
	
}

	
	
}

 
 
 
 
}


	
/
/
 
T
h
i
s
 
m
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
E
v
e
n
t
/
M
i
n
i
-
c
o
m
p
o
n
e
n
t

	
f
u
n
c
t
i
o
n
 
g
e
t
R
e
t
V
a
l
s
(
)

	
	
{

	
	
r
e
t
u
r
n
 
n
u
l
l
;

	
	
}

	
}

