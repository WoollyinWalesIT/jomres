
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
 
{

 
 
 
 
p
u
b
l
i
c
 
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
t
h
i
s
-
>
q
u
e
u
e
d
_
t
a
s
k
s
_
d
i
r
 
=
 
J
O
M
R
E
S
_
T
E
M
P
_
A
B
S
P
A
T
H
.
J
R
D
S
.
'
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
.
J
R
D
S
;

	
	

	
	
$
t
h
i
s
-
>
f
i
l
e
_
i
d
e
n
t
i
f
i
e
r
 
=
 
'
'
;

	
	

	
	
i
f
 
(
!
i
s
_
d
i
r
(
$
t
h
i
s
-
>
q
u
e
u
e
d
_
t
a
s
k
s
_
d
i
r
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
m
k
d
i
r
(
$
t
h
i
s
-
>
q
u
e
u
e
d
_
t
a
s
k
s
_
d
i
r
)
)
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
U
n
a
b
l
e
 
t
o
 
c
r
e
a
t
e
 
t
a
s
k
s
 
q
u
e
u
e
 
d
i
r
e
c
t
o
r
y
 
i
n
 
'
.
$
t
h
i
s
-
>
q
u
e
u
e
d
_
t
a
s
k
s
_
d
i
r
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

	
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
h
a
n
d
l
e
_
m
e
s
s
a
g
e
(
 
$
p
a
y
l
o
a
d
_
s
o
u
r
c
e
 
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
 
i
s
_
f
i
l
e
(
$
t
h
i
s
-
>
q
u
e
u
e
d
_
t
a
s
k
s
_
d
i
r
.
$
p
a
y
l
o
a
d
_
s
o
u
r
c
e
)
 
)
 
{

	
	
	
$
f
i
l
e
_
c
o
n
t
e
n
t
s
 
=
 
f
i
l
e
_
g
e
t
_
c
o
n
t
e
n
t
s
(
$
t
h
i
s
-
>
q
u
e
u
e
d
_
t
a
s
k
s
_
d
i
r
.
$
p
a
y
l
o
a
d
_
s
o
u
r
c
e
)
;

	
	
	
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
D
e
f
e
r
r
e
d
 
t
a
s
k
s
 
h
a
n
d
l
e
 
m
e
s
s
a
g
e
 
c
o
n
t
e
n
t
s
 
"
.
$
f
i
l
e
_
c
o
n
t
e
n
t
s
 
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

	
	
	
$
r
e
s
u
l
t
 
=
 
$
t
h
i
s
-
>
p
r
o
c
e
s
s
_
t
r
i
g
g
e
r
(
$
f
i
l
e
_
c
o
n
t
e
n
t
s
)
;

	
	
	
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
D
e
f
e
r
r
e
d
 
t
a
s
k
s
 
h
a
n
d
l
e
 
m
e
s
s
a
g
e
 
p
r
c
e
s
s
 
r
e
s
u
l
t
 
"
.
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
r
e
s
u
l
t
)
 
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

	
	
	
$
s
i
t
e
C
o
n
f
i
g
 
 
 
 
 
 
 
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
 
'
j
o
m
r
e
s
_
c
o
n
f
i
g
_
s
i
t
e
_
s
i
n
g
l
e
t
o
n
'
 
)
;

	
	
	
$
j
r
C
o
n
f
i
g
 
 
 
 
 
 
 
 
 
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;

	
	
	
i
f
 
(
$
j
r
C
o
n
f
i
g
[
'
d
e
v
e
l
o
p
m
e
n
t
_
p
r
o
d
u
c
t
i
o
n
'
]
 
!
=
 
'
d
e
v
e
l
o
p
m
e
n
t
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
u
n
l
i
n
k
(
$
t
h
i
s
-
>
q
u
e
u
e
d
_
t
a
s
k
s
_
d
i
r
.
$
p
a
y
l
o
a
d
_
s
o
u
r
c
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

	
	
}

 
 
 
 
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
p
r
o
c
e
s
s
_
t
r
i
g
g
e
r
(
 
$
m
e
s
s
a
g
e
 
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
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
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

	
	
$
m
e
s
s
a
g
e
_
c
o
n
t
e
n
t
s
 
=
 
u
n
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
m
e
s
s
a
g
e
)
;

	
	

	
	
i
f
 
(
!
i
s
s
e
t
(
$
m
e
s
s
a
g
e
_
c
o
n
t
e
n
t
s
-
>
t
r
i
g
g
e
r
_
n
u
m
b
e
r
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
R
e
c
e
i
v
e
d
 
m
e
s
s
a
g
e
 
w
i
t
h
 
n
o
 
t
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
'
)
;

 
 
 
 
 
 
 
 
}

	
	
i
f
 
(
!
i
s
s
e
t
(
$
m
e
s
s
a
g
e
_
c
o
n
t
e
n
t
s
-
>
p
a
y
l
o
a
d
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
R
e
c
e
i
v
e
d
 
m
e
s
s
a
g
e
 
w
i
t
h
 
n
o
 
p
a
y
l
o
a
d
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
$
c
o
m
p
l
e
t
e
_
m
e
s
s
a
g
e
 
=
 
a
r
r
a
y
 
(
 
"
p
a
y
l
o
a
d
"
 
=
>
 
$
m
e
s
s
a
g
e
_
c
o
n
t
e
n
t
s
-
>
p
a
y
l
o
a
d
 
,
 
"
t
a
s
k
"
 
=
>
 
$
m
e
s
s
a
g
e
_
c
o
n
t
e
n
t
s
-
>
t
a
s
k
 
)
;


 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
m
e
s
s
a
g
e
_
c
o
n
t
e
n
t
s
-
>
m
i
n
i
c
o
m
p
o
n
e
n
t
)
 
&
&
 
$
m
e
s
s
a
g
e
_
c
o
n
t
e
n
t
s
-
>
m
i
n
i
c
o
m
p
o
n
e
n
t
 
!
=
 
'
'
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
 
$
m
e
s
s
a
g
e
_
c
o
n
t
e
n
t
s
-
>
t
r
i
g
g
e
r
_
n
u
m
b
e
r
,
 
$
m
e
s
s
a
g
e
_
c
o
n
t
e
n
t
s
-
>
m
i
n
i
c
o
m
p
o
n
e
n
t
 
 
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
 
m
i
n
i
c
o
m
p
o
n
e
n
t
 
"
.
$
m
e
s
s
a
g
e
_
c
o
n
t
e
n
t
s
-
>
t
r
i
g
g
e
r
_
n
u
m
b
e
r
.
$
m
e
s
s
a
g
e
_
c
o
n
t
e
n
t
s
-
>
m
i
n
i
c
o
m
p
o
n
e
n
t
 
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
 
,
 
$
m
e
s
s
a
g
e
_
c
o
n
t
e
n
t
s
-
>
p
a
y
l
o
a
d
 
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
$
m
e
s
s
a
g
e
_
c
o
n
t
e
n
t
s
-
>
t
r
i
g
g
e
r
_
n
u
m
b
e
r
,
 
$
m
e
s
s
a
g
e
_
c
o
n
t
e
n
t
s
-
>
m
i
n
i
c
o
m
p
o
n
e
n
t
,
 
$
c
o
m
p
l
e
t
e
_
m
e
s
s
a
g
e
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
e
l
s
e
 
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
F
a
i
l
e
d
 
t
o
 
f
i
n
d
 
"
.
$
m
e
s
s
a
g
e
_
c
o
n
t
e
n
t
s
-
>
t
r
i
g
g
e
r
_
n
u
m
b
e
r
.
$
m
e
s
s
a
g
e
_
c
o
n
t
e
n
t
s
-
>
m
i
n
i
c
o
m
p
o
n
e
n
t
,
 
'
C
o
r
e
'
,
 
'
W
A
R
N
I
N
G
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

	
	
}
 
e
l
s
e
 
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
-
>
t
r
i
g
g
e
r
E
v
e
n
t
(
$
m
e
s
s
a
g
e
_
c
o
n
t
e
n
t
s
-
>
t
r
i
g
g
e
r
_
n
u
m
b
e
r
 
,
 
$
c
o
m
p
l
e
t
e
_
m
e
s
s
a
g
e
 
)
;

	
	
}

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
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
 
$
t
r
i
g
g
e
r
_
n
u
m
b
e
r
 
=
 
'
'
,
 
$
m
i
n
i
c
o
m
p
o
n
e
n
t
 
=
 
'
'
,
 
$
p
a
y
l
o
a
d
 
=
 
'
'
 
)
 
 
{

	
	
i
f
 
(
$
t
r
i
g
g
e
r
_
n
u
m
b
e
r
 
=
=
 
'
'
 
)
 
{

	
	
	
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
t
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
 
n
o
t
 
s
e
t
 
'
)
;

	
	
}

	
	
i
f
 
(
$
m
i
n
i
c
o
m
p
o
n
e
n
t
 
=
=
 
'
'
 
)
 
{

	
	
	
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
m
i
n
i
c
o
m
p
o
n
e
n
t
 
n
o
t
 
s
e
t
 
'
)
;

	
	
}

	
	
i
f
 
(
$
p
a
y
l
o
a
d
 
=
=
 
'
'
 
)
 
{

	
	
	
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
p
a
y
l
o
a
d
 
n
o
t
 
s
e
t
 
'
)
;

	
	
}

	
	

	
	
$
r
a
n
d
o
m
s
t
r
i
n
g
 
=
 
g
e
n
e
r
a
t
e
J
o
m
r
e
s
R
a
n
d
o
m
S
t
r
i
n
g
(
5
0
)
;

	
	
$
m
e
s
s
a
g
e
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

	
	
$
m
e
s
s
a
g
e
-
>
t
r
i
g
g
e
r
_
n
u
m
b
e
r
 
=
 
$
t
r
i
g
g
e
r
_
n
u
m
b
e
r
;

	
	
$
m
e
s
s
a
g
e
-
>
m
i
n
i
c
o
m
p
o
n
e
n
t
 
=
 
$
m
i
n
i
c
o
m
p
o
n
e
n
t
;

 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
-
>
t
a
s
k
 
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
t
a
s
k
'
)
;
 
/
/
 
F
o
r
 
e
x
a
m
p
l
e
,
 
t
h
e
 
B
e
d
s
2
4
 
p
l
u
g
i
n
 
w
i
l
l
 
n
o
t
 
w
a
n
t
 
t
o
 
c
r
e
a
t
e
 
b
o
o
k
i
n
g
s
 
i
f
 
t
h
e
y
'
r
e
 
f
r
o
m
 
i
m
p
o
r
t
 
f
u
n
c
t
i
o
n
a
l
i
t
y
,
 
t
h
e
r
e
f
o
r
e
 
w
e
 
n
e
e
d
 
t
o
 
a
l
l
o
w
 
t
h
e
 
c
a
l
l
e
d
 
s
c
r
i
p
t
 
t
o
 
f
i
l
t
e
r
 
o
u
t
 
w
e
b
h
o
o
k
 
a
c
t
i
o
n
s
 
b
a
s
e
d
 
o
n
 
t
a
s
k
s

 
 
 
 
 
 
 
 

	
	
$
m
e
s
s
a
g
e
-
>
p
a
y
l
o
a
d
 
=
 
$
p
a
y
l
o
a
d
;

	
	
i
f
 
(
 
f
i
l
e
_
p
u
t
_
c
o
n
t
e
n
t
s
(
 
$
t
h
i
s
-
>
q
u
e
u
e
d
_
t
a
s
k
s
_
d
i
r
.
$
r
a
n
d
o
m
s
t
r
i
n
g
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
m
e
s
s
a
g
e
)
 
)
 
)
 
{

	
	
	
$
t
h
i
s
-
>
f
i
l
e
_
i
d
e
n
t
i
f
i
e
r
 
=
 
$
r
a
n
d
o
m
s
t
r
i
n
g
;

	
	
}
 

	
	
e
l
s
e
 
{

	
	
	
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
f
a
i
l
e
d
 
t
o
 
c
r
e
a
t
e
 
'
.
$
t
h
i
s
-
>
q
u
e
u
e
d
_
t
a
s
k
s
_
d
i
r
.
$
r
a
n
d
o
m
s
t
r
i
n
g
)
;

	
	
}

	
}

 
 
 
 

 
 
 
 
/
/
 
T
h
e
 
d
i
s
p
a
t
c
h
e
r
 
w
i
l
l
 
r
e
c
e
i
v
e
 
a
 
t
r
i
g
g
e
r
,
 
w
h
i
c
h
 
i
s
 
a
 
m
i
n
i
c
o
m
p
o
n
e
n
t
 
t
r
i
g
g
e
r
 
*
n
u
m
b
e
r
*
,
 
a
n
 
o
p
t
i
o
n
a
l
 
s
p
e
c
i
f
i
c
 
e
v
e
n
t
 
,
 
a
n
d
 
t
h
e
 
p
a
y
l
o
a
d
 
s
t
r
i
n
g
.
 
T
h
e
 
s
t
r
i
n
g
 
c
a
n
 
c
o
n
t
a
i
n
 
a
n
y
t
h
i
n
g
 
r
e
q
u
i
r
e
d
,
 
x
m
l
,
 
j
s
o
n
,
 
i
t
 
d
o
e
s
n
Â
´
t
 
m
a
t
t
e
r
 
a
s
 
t
h
e
 
m
i
n
i
c
o
m
p
o
n
e
n
t
 
c
a
l
l
e
d
 
w
i
l
l
 
u
s
e
 
t
h
a
t
 
i
n
f
o
r
m
a
t
i
o
n
 
a
s
 
i
t
 
s
e
e
s
 
f
i
t
.

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
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
{

	
	
i
f
 
(
 
$
t
h
i
s
-
>
f
i
l
e
_
i
d
e
n
t
i
f
i
e
r
 
=
=
 
'
'
 
)
 
{

	
	
	
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
f
i
l
e
_
i
d
e
n
t
i
f
i
e
r
 
n
o
t
 
s
e
t
.
 
H
a
v
e
 
y
o
u
 
r
u
n
 
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
 
y
e
t
?
 
'
)
;

	
	
}


 
 
 
 
 
 
 
 
$
u
r
l
 
=
 
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
A
J
A
X
.
"
&
t
a
s
k
=
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
p
r
o
c
e
s
s
&
p
a
y
l
o
a
d
_
s
o
u
r
c
e
=
"
.
$
t
h
i
s
-
>
f
i
l
e
_
i
d
e
n
t
i
f
i
e
r
;

 
 

 
 
 
 
 
 
 
 
$
c
u
r
l
_
o
p
t
i
o
n
s
 
=
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
C
U
R
L
O
P
T
_
U
R
L
 
=
>
 
$
u
r
l
,

 
 
 
 
 
 
 
 
 
C
U
R
L
O
P
T
_
P
O
S
T
 
=
>
 
0
,

 
 
 
 
 
 
 
 
 
C
U
R
L
O
P
T
_
H
T
T
P
_
V
E
R
S
I
O
N
 
=
>
 
1
.
0
,

 
 
 
 
 
 
 
 
 
C
U
R
L
O
P
T
_
H
E
A
D
E
R
 
=
>
 
0
,

 
 
 
 
 
 
 
 
 
C
U
R
L
O
P
T
_
T
I
M
E
O
U
T
 
=
>
 
1

 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
 
$
c
u
r
l
 
=
 
c
u
r
l
_
i
n
i
t
(
)
;

 
 
 
 
 
 
 
 
 
c
u
r
l
_
s
e
t
o
p
t
_
a
r
r
a
y
(
 
$
c
u
r
l
,
 
$
c
u
r
l
_
o
p
t
i
o
n
s
 
)
;

 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
c
u
r
l
_
e
x
e
c
(
 
$
c
u
r
l
 
)
;

 
 
 
 
 
 
 
 
 
c
u
r
l
_
c
l
o
s
e
(
 
$
c
u
r
l
 
)
;

 
 
 
 
 
 
 
 
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
e
n
t
 
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
 
"
.
$
t
h
i
s
-
>
f
i
l
e
_
i
d
e
n
t
i
f
i
e
r
.
"
 
t
o
 
"
.
$
u
r
l
 
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
r
e
s
u
l
t
)
 
 
)
;

 
 
 
 
 
}

 
 
 
 

}

