
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
g
e
n
e
r
i
c
_
b
o
o
k
i
n
g
_
i
n
s
e
r
t

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
i
n
i
t
(
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
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
r
e
a
t
e
_
b
o
o
k
i
n
g
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
s
e
s
s
i
o
n
 
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
j
o
m
r
e
s
s
e
s
s
i
o
n
'
)
;

 
 
 
 
 
 
 
 
$
i
n
s
e
r
t
S
u
c
c
e
s
s
f
u
l
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
t
r
y
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
l
i
d
a
t
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
p
p
l
y
_
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
p
p
l
y
_
g
u
e
s
t
_
d
e
t
a
i
l
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
s
e
r
t
S
u
c
c
e
s
s
f
u
l
 
=
 
i
n
s
e
r
t
I
n
t
e
r
n
e
t
B
o
o
k
i
n
g
(
$
j
o
m
r
e
s
s
e
s
s
i
o
n
,
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
d
e
p
o
s
i
t
p
a
i
d
s
u
c
c
e
s
s
f
u
l
l
y
'
]
,
 
f
a
l
s
e
,
 
'
'
,
 
f
a
l
s
e
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
i
n
s
e
r
t
S
u
c
c
e
s
s
f
u
l
;

 
 
 
 
 
 
 
 
}
 
c
a
t
c
h
 
(
E
x
c
e
p
t
i
o
n
 
$
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
e
-
>
g
e
t
M
e
s
s
a
g
e
(
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
v
a
l
i
d
a
t
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
g
u
e
s
t
_
d
e
t
a
i
l
s
[
'
f
i
r
s
t
n
a
m
e
'
]
 
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
 
f
i
r
s
t
n
a
m
e
 
i
s
 
n
o
t
 
v
a
l
i
d
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
g
u
e
s
t
_
d
e
t
a
i
l
s
[
'
s
u
r
n
a
m
e
'
]
 
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
 
s
u
r
n
a
m
e
 
i
s
 
n
o
t
 
v
a
l
i
d
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
g
u
e
s
t
_
d
e
t
a
i
l
s
[
'
e
m
a
i
l
'
]
 
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
 
e
m
a
i
l
 
i
s
 
n
o
t
 
v
a
l
i
d
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
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
u
i
d
'
]
 
=
=
 
0
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
 
i
s
 
n
o
t
 
v
a
l
i
d
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
r
e
q
u
e
s
t
e
d
R
o
o
m
'
]
 
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
 
r
e
q
u
e
s
t
e
d
R
o
o
m
 
i
s
 
n
o
t
 
v
a
l
i
d
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
/
/
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
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
'
]
 
=
=
 
0
.
0
0
 
)

/
/
	
	
	
{

/
/
	
	
	
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
"
 
E
r
r
o
r
 
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
 
i
s
 
n
o
t
 
v
a
l
i
d
"
)
;

/
/
	
	
	
}

 
 
 
 
 
 
 
 
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
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
c
o
n
t
r
a
c
t
_
t
o
t
a
l
'
]
 
=
=
 
0
.
0
0
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
 
c
o
n
t
r
a
c
t
_
t
o
t
a
l
 
i
s
 
n
o
t
 
v
a
l
i
d
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
/
/
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
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
t
a
x
'
]
 
=
=
 
0
.
0
0
 
)

/
/
	
	
	
{

/
/
	
	
	
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
"
 
E
r
r
o
r
 
t
a
x
 
i
s
 
n
o
t
 
v
a
l
i
d
"
)
;

/
/
	
	
	
}

 
 
 
 
 
 
 
 
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
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
r
o
o
m
_
t
o
t
a
l
'
]
 
=
=
 
0
.
0
0
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
 
r
o
o
m
_
t
o
t
a
l
 
i
s
 
n
o
t
 
v
a
l
i
d
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
r
o
o
m
_
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
'
]
 
=
=
 
0
.
0
0
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
 
r
o
o
m
_
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
 
i
s
 
n
o
t
 
v
a
l
i
d
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
c
u
r
r
e
n
c
y
_
c
o
d
e
'
]
 
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
 
c
u
r
r
e
n
c
y
_
c
o
d
e
 
i
s
 
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
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
a
r
r
i
v
a
l
D
a
t
e
'
]
 
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
 
a
r
r
i
v
a
l
D
a
t
e
 
i
s
 
n
o
t
 
v
a
l
i
d
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
]
 
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
 
d
e
p
a
r
t
u
r
e
D
a
t
e
 
i
s
 
n
o
t
 
v
a
l
i
d
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
b
o
o
k
i
n
g
_
n
u
m
b
e
r
'
]
 
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
 
b
o
o
k
i
n
g
_
n
u
m
b
e
r
 
i
s
 
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
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
c
o
n
t
r
a
c
t
_
u
i
d
 
F
R
O
M
 
#
_
_
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
t
r
a
c
t
s
 
W
H
E
R
E
 
t
a
g
 
L
I
K
E
 
'
"
.
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
b
o
o
k
i
n
g
_
n
u
m
b
e
r
'
]
.
"
'
 
L
I
M
I
T
 
1
"
;

 
 
 
 
 
 
 
 
$
b
k
l
i
s
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
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
b
k
l
i
s
t
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
 
b
o
o
k
i
n
g
_
n
u
m
b
e
r
 
'
.
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
b
o
o
k
i
n
g
_
n
u
m
b
e
r
'
]
.
'
 
a
l
r
e
a
d
y
 
e
x
i
s
t
s
 
i
n
 
t
h
e
 
d
a
t
a
b
a
s
e
.
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
o
k
_
t
o
_
b
o
o
k
'
]
 
=
=
 
t
r
u
e
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
i
n
i
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
 
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
t
e
m
p
_
b
o
o
k
i
n
g
_
h
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
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
r
e
s
e
t
T
e
m
p
B
o
o
k
i
n
g
D
a
t
a
(
)
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
r
e
s
e
t
T
e
m
p
G
u
e
s
t
D
a
t
a
(
)
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
r
e
s
e
t
C
r
e
d
i
t
C
a
r
d
D
e
t
a
i
l
s
(
)
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
 
=
 
a
r
r
a
y
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
u
i
d
'
 
=
>
 
0
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
1
 
*
*
*
*
*
 
R
e
q
u
i
r
e
d
 
*
*
*
*
*

 
 
 
 
 
 
 
 
 
 
 
 
'
r
e
q
u
e
s
t
e
d
R
o
o
m
'
 
=
>
 
'
'
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
"
4
8
^
1
5
2
2
,
4
9
^
1
5
2
2
"
 
A
 
H
A
T
 
s
e
p
a
r
a
t
e
d
 
l
i
s
t
 
o
f
 
r
o
o
m
s
 
c
o
m
b
i
n
e
d
 
w
i
t
h
 
t
a
r
i
f
f
s
 
*
*
*
*
*
 
R
e
q
u
i
r
e
d
 
*
*
*
*
*

 
 
 
 
 
 
 
 
 
 
 
 
'
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
'
 
=
>
 
'
'
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
C
o
m
m
a
 
s
e
p
e
r
a
t
e
d
 
l
i
s
t
 
o
f
 
a
l
l
 
d
a
t
e
s
 
i
n
 
b
o
o
k
i
n
g

 
 
 
 
 
 
 
 
 
 
 
 
'
g
u
e
s
t
s
_
u
i
d
'
 
=
>
 
'
'
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
I
f
 
i
s
 
e
m
p
t
y
 
o
r
 
z
e
r
o
 
t
h
e
n
 
a
 
n
e
w
 
g
u
e
s
t
 
w
i
l
l
 
b
e
 
c
r
e
a
t
e
d
 
f
r
o
m
 
t
h
e
 
g
u
e
s
t
 
d
e
t
a
i
l
s
 
a
r
r
a
y

 
 
 
 
 
 
 
 
 
 
 
 
'
s
i
n
g
l
e
_
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
'
 
=
>
 
0
.
0
0
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
f
l
o
a
t
(
1
0
)

 
 
 
 
 
 
 
 
 
 
 
 
'
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
'
 
=
>
 
0
.
0
0
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
f
l
o
a
t
(
2
2
0
)

 
 
 
 
 
 
 
 
 
 
 
 
'
c
o
n
t
r
a
c
t
_
t
o
t
a
l
'
 
=
>
 
0
.
0
0
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
f
l
o
a
t
(
4
0
0
)
 
*
*
*
*
*
 
R
e
q
u
i
r
e
d
 
*
*
*
*
*

 
 
 
 
 
 
 
 
 
 
 
 
/
*
 
"
e
x
t
r
a
s
v
a
l
u
e
"
	
	
	
	
=
>
 
0
.
0
0
,
	
	
	
	
/
/
 
f
l
o
a
t
(
4
0
)

 
 
 
 
 
 
 
 
 
 
 
 
"
e
x
t
r
a
s
v
a
l
u
e
s
_
i
t
e
m
s
"
	
	
=
>
 
a
r
r
a
y
(
)
,
	
	
	
	
/
/
 
"
a
:
1
:
{
i
:
1
;
a
:
1
:
{
s
:
1
9
:
"
q
u
a
n
t
i
t
y
_
m
u
l
t
i
p
l
i
e
r
"
;
i
:
1
;
}
}
"

 
 
 
 
 
 
 
 
 
 
 
 
"
e
x
t
r
a
s
"
	
	
	
	
	
=
>
 
"
"
,
	
	
	
	
	
/
/
 
"
1
,
"

 
 
 
 
 
 
 
 
 
 
 
 
"
e
x
t
r
a
s
q
u
a
n
t
i
t
i
e
s
"
	
	
	
=
>
 
a
r
r
a
y
(
)
,
	
	
	
	
/
/
 
a
r
r
a
y
(
1
)
 
{
 
[
1
]
=
>
i
n
t
(
2
)
 
}
 
*
/

 
 
 
 
 
 
 
 
 
 
 
 
'
d
e
p
o
s
i
t
p
a
i
d
s
u
c
c
e
s
s
f
u
l
l
y
'
 
=
>
 
f
a
l
s
e
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
T
r
u
e
 
o
r
 
f
a
l
s
e
 
(
e
.
g
.
 
i
f
 
t
h
e
 
p
a
y
m
e
n
t
 
w
a
s
 
a
t
 
t
h
e
 
f
r
o
n
t
 
d
e
s
k
,
 
t
h
i
s
 
w
o
u
l
d
 
b
e
 
s
e
t
 
t
o
 
t
r
u
e
)
 
*
*
*
*
*
 
R
e
q
u
i
r
e
d
 
*
*
*
*
*

 
 
 
 
 
 
 
 
 
 
 
 
'
t
a
x
'
 
=
>
 
0
.
0
0
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
f
l
o
a
t
(
3
0
)
 
 
*
*
*
*
*
 
R
e
q
u
i
r
e
d
 
*
*
*
*
*
 
?
?
?
?

 
 
 
 
 
 
 
 
 
 
 
 
'
b
o
o
k
e
r
_
c
l
a
s
s
'
 
=
>
 
'
1
0
0
'
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
U
n
u
s
e
d

 
 
 
 
 
 
 
 
 
 
 
 
'
o
k
_
t
o
_
b
o
o
k
'
 
=
>
 
f
a
l
s
e
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
D
o
 
n
o
t
 
s
e
t
,
 
t
h
i
s
 
c
l
a
s
s
 
w
i
l
l
 
s
e
t
 
t
h
i
s
 
f
l
a
g
 
o
n
c
e
 
i
t
'
s
 
p
e
r
f
o
r
m
e
d
 
i
t
'
s
 
p
r
e
-
i
n
s
e
r
t
i
o
n
 
c
h
e
c
k
s
 
*
*
*
*
*
 
R
e
q
u
i
r
e
d
 
*
*
*
*
*

 
 
 
 
 
 
 
 
 
 
 
 
'
t
o
t
a
l
_
i
n
_
p
a
r
t
y
'
 
=
>
 
0
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
i
n
t
(
2
)

 
 
 
 
 
 
 
 
 
 
 
 
'
r
o
o
m
_
t
o
t
a
l
'
 
=
>
 
0
.
0
0
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
f
l
o
a
t
(
1
5
0
)
 
N
E
T
 
P
R
I
C
E
!
!
!
!
 
(
p
r
i
c
e
 
w
i
t
h
o
u
t
 
t
a
x
)
 
*
*
*
*
*
 
R
e
q
u
i
r
e
d
 
*
*
*
*
*

 
 
 
 
 
 
 
 
 
 
 
 
'
r
o
o
m
_
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
'
 
=
>
 
0
.
0
0
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
f
l
o
a
t
(
1
5
0
)
 
N
E
T
 
P
R
I
C
E
!
!
!
!
 
(
p
r
i
c
e
 
w
i
t
h
o
u
t
 
t
a
x
)
 
*
*
*
*
*
 
R
e
q
u
i
r
e
d
 
*
*
*
*
*

 
 
 
 
 
 
 
 
 
 
 
 
'
c
u
r
r
e
n
c
y
_
c
o
d
e
'
 
=
>
 
'
'
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
s
t
r
i
n
g
 
(
E
U
R
)
 
*
*
*
*
*
 
R
e
q
u
i
r
e
d
 
*
*
*
*
*

 
 
 
 
 
 
 
 
 
 
 
 
'
c
o
u
p
o
n
_
i
d
'
 
=
>
 
'
'
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
"
1
"

 
 
 
 
 
 
 
 
 
 
 
 
'
c
o
u
p
o
n
_
c
o
d
e
'
 
=
>
 
'
'
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
"
r
D
R
k
p
U
S
K
B
b
q
F
T
C
U
"

 
 
 
 
 
 
 
 
 
 
 
 
'
c
o
u
p
o
n
_
d
e
t
a
i
l
s
'
 
=
>
 
a
r
r
a
y
(
)
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
a
r
r
a
y
(
5
)
 
{
 
[
"
a
m
o
u
n
t
"
]
=
>
s
t
r
i
n
g
(
2
)
 
"
2
0
"
 
[
"
i
s
_
p
e
r
c
e
n
t
a
g
e
"
]
=
>
s
t
r
i
n
g
(
1
)
 
"
1
"
 
[
"
c
o
u
p
o
n
_
i
d
"
]
=
>
 
s
t
r
i
n
g
(
1
)
 
"
1
"
 
[
"
b
o
o
k
i
n
g
_
v
a
l
i
d
_
f
r
o
m
"
]
=
>
 
s
t
r
i
n
g
(
1
0
)
 
"
2
0
1
3
-
0
6
-
2
0
"
 
[
"
b
o
o
k
i
n
g
_
v
a
l
i
d
_
t
o
"
]
=
>
 
s
t
r
i
n
g
(
1
0
)
 
"
2
0
1
4
-
0
6
-
0
1
"
 
}

 
 
 
 
 
 
 
 
 
 
 
 
'
b
o
o
k
i
n
g
_
n
o
t
e
s
'
 
=
>
 
a
r
r
a
y
(
)
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
a
r
r
a
y
(
1
)
 
{
 
[
"
C
o
u
p
o
n
"
]
=
>
s
t
r
i
n
g
(
7
0
)
 
"
B
o
o
k
i
n
g
 
d
i
s
c
o
u
n
t
e
d
.
 
C
o
u
p
o
n
 
c
o
d
e
/
d
i
s
c
o
u
n
t
 
v
a
l
u
e
/
c
o
u
p
o
n
 
s
e
t
t
i
n
g
s
 
:
 
 
N
/
A
 
"
}

 
 
 
 
 
 
 
 
 
 
 
 
'
b
o
o
k
i
n
g
_
n
u
m
b
e
r
'
 
=
>
 
'
'
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
i
n
t
(
1
4
0
6
3
0
6
7
)
 
*
*
*
*
*
 
R
e
q
u
i
r
e
d
 
*
*
*
*
*

 
 
 
 
 
 
 
 
 
 
 
 
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
c
u
r
r
e
n
c
y
c
o
d
e
'
 
=
>
 
'
'
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
N
o
t
 
r
e
q
u
i
r
e
d
,
 
w
i
l
l
 
b
e
 
s
e
t
 
l
a
t
e
r

 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
r
i
v
a
l
D
a
t
e
'
 
=
>
 
'
'
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
"
2
0
1
3
/
1
2
/
1
3
"
 
*
*
*
*
*
 
R
e
q
u
i
r
e
d
 
*
*
*
*
*

 
 
 
 
 
 
 
 
 
 
 
 
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
 
=
>
 
'
'
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
"
2
0
1
3
/
1
2
/
1
6
"
 
*
*
*
*
*
 
R
e
q
u
i
r
e
d
 
*
*
*
*
*

 
 
 
 
 
 
 
 
 
 
 
 
'
b
o
o
k
e
d
_
i
n
'
 
=
>
 
0
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
(
i
n
t
)
 
1
 
i
f
 
g
u
e
s
t
 
i
s
 
s
e
t
 
a
s
 
b
o
o
k
e
d
 
i
n

 
 
 
 
 
 
 
 
 
 
 
 
'
s
e
n
d
G
u
e
s
t
E
m
a
i
l
'
 
=
>
 
t
r
u
e
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
(
b
o
o
l
)
 
t
r
u
e
 
i
f
 
s
h
o
u
l
d
 
s
e
n
d
 
a
 
b
o
o
k
i
n
g
 
e
m
a
i
l
 
t
o
 
g
u
e
s
t

 
 
 
 
 
 
 
 
 
 
 
 
'
s
e
n
d
H
o
t
e
l
E
m
a
i
l
'
 
=
>
 
t
r
u
e
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
(
b
o
o
k
)
 
t
r
u
e
 
i
f
 
s
h
o
u
l
d
 
s
e
n
d
 
a
 
b
o
o
k
i
n
g
 
e
m
a
i
l
 
t
o
 
h
o
t
e
l

 
 
 
 
 
 
 
 
 
 
 
 
'
r
e
f
e
r
r
e
r
'
 
=
>
 
'
'
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
"
A
N
 
O
t
h
e
r
 
c
h
a
n
n
e
l
"

	
	
	
'
c
h
a
n
n
e
l
_
m
a
n
a
g
e
r
_
b
o
o
k
i
n
g
'
 
=
>
 
0
,
 
 
 
 
 
 
 
 
 
 
/
/
 
(
i
n
t
)
 
i
s
 
t
h
i
s
 
b
o
o
k
i
n
g
 
f
r
o
m
 
a
 
c
h
a
n
n
e
l
 
m
a
n
a
g
e
r
?
 
y
e
s
/
n
o
"

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
u
e
s
t
_
d
e
t
a
i
l
s
 
=
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
'
e
x
i
s
t
i
n
g
_
i
d
'
 
=
>
 
'
'
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
I
f
 
n
o
t
 
s
e
t
 
a
 
n
e
w
 
g
u
e
s
t
 
w
i
l
l
 
b
e
 
c
r
e
a
t
e
d

 
 
 
 
 
 
 
 
 
 
 
 
'
m
o
s
_
u
s
e
r
i
d
'
 
=
>
 
'
'
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
T
h
e
 
C
M
S
 
u
s
e
r
 
i
d
.
 
I
f
 
M
O
S
 
I
D
 
i
s
 
s
e
t
 
t
h
e
n
 
t
h
a
t
 
e
x
i
s
t
i
n
g
 
C
M
S
 
u
s
e
r
 
w
i
l
l
 
b
e
 
u
s
e
d
.

 
 
 
 
 
 
 
 
 
 
 
 
'
f
i
r
s
t
n
a
m
e
'
 
=
>
 
'
'
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
"
M
a
j
`
o
r
"
 
*
*
*
*
*
 
R
e
q
u
i
r
e
d
 
*
*
*
*
*

 
 
 
 
 
 
 
 
 
 
 
 
'
s
u
r
n
a
m
e
'
 
=
>
 
'
'
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
"
G
o
w
e
n
"
 
*
*
*
*
*
 
R
e
q
u
i
r
e
d
 
*
*
*
*
*

 
 
 
 
 
 
 
 
 
 
 
 
'
h
o
u
s
e
'
 
=
>
 
'
'
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
"
W
a
t
e
r
y
 
F
o
w
l
s
"

 
 
 
 
 
 
 
 
 
 
 
 
'
s
t
r
e
e
t
'
 
=
>
 
'
'
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
"
a
 
S
t
r
e
e
t
"

 
 
 
 
 
 
 
 
 
 
 
 
'
t
o
w
n
'
 
=
>
 
'
'
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
"
W
h
e
r
e
v
e
r
"

 
 
 
 
 
 
 
 
 
 
 
 
'
r
e
g
i
o
n
'
 
=
>
 
'
'
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
"
5
6
6
"

 
 
 
 
 
 
 
 
 
 
 
 
'
c
o
u
n
t
r
y
'
 
=
>
 
'
'
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
"
C
H
"

 
 
 
 
 
 
 
 
 
 
 
 
'
p
o
s
t
c
o
d
e
'
 
=
>
 
'
'
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
"
X
X
N
N
 
N
X
X
"

 
 
 
 
 
 
 
 
 
 
 
 
'
t
e
l
_
l
a
n
d
l
i
n
e
'
 
=
>
 
'
'
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
"
0
1
0
0
0
 
1
2
3
4
5
6
"

 
 
 
 
 
 
 
 
 
 
 
 
'
t
e
l
_
m
o
b
i
l
e
'
 
=
>
 
'
'
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
"
0
1
7
7
7
 
1
2
3
4
5
6
"

 
 
 
 
 
 
 
 
 
 
 
 
'
e
m
a
i
l
'
 
=
>
 
'
'
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
"
n
o
t
i
f
y
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
"
 
*
*
*
*
*
 
R
e
q
u
i
r
e
d
 
*
*
*
*
*

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
a
p
p
l
y
_
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
 
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
t
e
m
p
_
b
o
o
k
i
n
g
_
h
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
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
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
u
i
d
'
]
 
=
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
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
u
i
d
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
'
r
e
q
u
e
s
t
e
d
R
o
o
m
'
]
 
=
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
r
e
q
u
e
s
t
e
d
R
o
o
m
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
'
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
'
]
 
=
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
'
g
u
e
s
t
s
_
u
i
d
'
]
 
=
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
g
u
e
s
t
s
_
u
i
d
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
'
s
i
n
g
l
e
_
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
'
]
 
=
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
s
i
n
g
l
e
_
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
'
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
'
]
 
=
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
'
c
o
n
t
r
a
c
t
_
t
o
t
a
l
'
]
 
=
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
c
o
n
t
r
a
c
t
_
t
o
t
a
l
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
'
d
e
p
o
s
i
t
p
a
i
d
s
u
c
c
e
s
s
f
u
l
l
y
'
]
 
=
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
d
e
p
o
s
i
t
p
a
i
d
s
u
c
c
e
s
s
f
u
l
l
y
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
'
t
a
x
'
]
 
=
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
t
a
x
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
'
b
o
o
k
e
r
_
c
l
a
s
s
'
]
 
=
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
b
o
o
k
e
r
_
c
l
a
s
s
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
'
o
k
_
t
o
_
b
o
o
k
'
]
 
=
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
o
k
_
t
o
_
b
o
o
k
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
'
t
o
t
a
l
_
i
n
_
p
a
r
t
y
'
]
 
=
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
t
o
t
a
l
_
i
n
_
p
a
r
t
y
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
'
r
o
o
m
_
t
o
t
a
l
'
]
 
=
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
r
o
o
m
_
t
o
t
a
l
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
'
r
o
o
m
_
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
'
]
 
=
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
r
o
o
m
_
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
'
c
o
u
p
o
n
_
i
d
'
]
 
=
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
c
o
u
p
o
n
_
i
d
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
'
c
o
u
p
o
n
_
c
o
d
e
'
]
 
=
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
c
o
u
p
o
n
_
c
o
d
e
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
'
c
o
u
p
o
n
_
d
e
t
a
i
l
s
'
]
 
=
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
c
o
u
p
o
n
_
d
e
t
a
i
l
s
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
'
b
o
o
k
i
n
g
_
n
o
t
e
s
'
]
 
=
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
b
o
o
k
i
n
g
_
n
o
t
e
s
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
'
b
o
o
k
i
n
g
_
n
u
m
b
e
r
'
]
 
=
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
b
o
o
k
i
n
g
_
n
u
m
b
e
r
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
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
c
u
r
r
e
n
c
y
c
o
d
e
'
]
 
=
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
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
c
u
r
r
e
n
c
y
c
o
d
e
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
'
a
r
r
i
v
a
l
D
a
t
e
'
]
 
=
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
a
r
r
i
v
a
l
D
a
t
e
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
]
 
=
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
'
b
o
o
k
e
d
_
i
n
'
]
 
=
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
b
o
o
k
e
d
_
i
n
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
'
s
e
n
d
G
u
e
s
t
E
m
a
i
l
'
]
 
=
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
s
e
n
d
G
u
e
s
t
E
m
a
i
l
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
'
s
e
n
d
H
o
t
e
l
E
m
a
i
l
'
]
 
=
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
s
e
n
d
H
o
t
e
l
E
m
a
i
l
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
'
r
e
f
e
r
r
e
r
'
]
 
=
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
r
e
f
e
r
r
e
r
'
]
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
'
c
h
a
n
n
e
l
_
m
a
n
a
g
e
r
_
b
o
o
k
i
n
g
'
]
 
=
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
c
h
a
n
n
e
l
_
m
a
n
a
g
e
r
_
b
o
o
k
i
n
g
'
]
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
a
p
p
l
y
_
g
u
e
s
t
_
d
e
t
a
i
l
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
 
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
t
e
m
p
_
b
o
o
k
i
n
g
_
h
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
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
[
'
e
x
i
s
t
i
n
g
_
i
d
'
]
 
=
 
$
t
h
i
s
-
>
g
u
e
s
t
_
d
e
t
a
i
l
s
[
'
e
x
i
s
t
i
n
g
_
i
d
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
[
'
m
o
s
_
u
s
e
r
i
d
'
]
 
=
 
$
t
h
i
s
-
>
g
u
e
s
t
_
d
e
t
a
i
l
s
[
'
m
o
s
_
u
s
e
r
i
d
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
[
'
f
i
r
s
t
n
a
m
e
'
]
 
=
 
$
t
h
i
s
-
>
g
u
e
s
t
_
d
e
t
a
i
l
s
[
'
f
i
r
s
t
n
a
m
e
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
[
'
s
u
r
n
a
m
e
'
]
 
=
 
$
t
h
i
s
-
>
g
u
e
s
t
_
d
e
t
a
i
l
s
[
'
s
u
r
n
a
m
e
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
[
'
h
o
u
s
e
'
]
 
=
 
$
t
h
i
s
-
>
g
u
e
s
t
_
d
e
t
a
i
l
s
[
'
h
o
u
s
e
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
[
'
s
t
r
e
e
t
'
]
 
=
 
$
t
h
i
s
-
>
g
u
e
s
t
_
d
e
t
a
i
l
s
[
'
s
t
r
e
e
t
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
[
'
t
o
w
n
'
]
 
=
 
$
t
h
i
s
-
>
g
u
e
s
t
_
d
e
t
a
i
l
s
[
'
t
o
w
n
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
[
'
r
e
g
i
o
n
'
]
 
=
 
$
t
h
i
s
-
>
g
u
e
s
t
_
d
e
t
a
i
l
s
[
'
r
e
g
i
o
n
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
[
'
c
o
u
n
t
r
y
'
]
 
=
 
$
t
h
i
s
-
>
g
u
e
s
t
_
d
e
t
a
i
l
s
[
'
c
o
u
n
t
r
y
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
[
'
p
o
s
t
c
o
d
e
'
]
 
=
 
$
t
h
i
s
-
>
g
u
e
s
t
_
d
e
t
a
i
l
s
[
'
p
o
s
t
c
o
d
e
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
[
'
t
e
l
_
l
a
n
d
l
i
n
e
'
]
 
=
 
$
t
h
i
s
-
>
g
u
e
s
t
_
d
e
t
a
i
l
s
[
'
t
e
l
_
l
a
n
d
l
i
n
e
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
[
'
t
e
l
_
m
o
b
i
l
e
'
]
 
=
 
$
t
h
i
s
-
>
g
u
e
s
t
_
d
e
t
a
i
l
s
[
'
t
e
l
_
m
o
b
i
l
e
'
]
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
[
'
e
m
a
i
l
'
]
 
=
 
$
t
h
i
s
-
>
g
u
e
s
t
_
d
e
t
a
i
l
s
[
'
e
m
a
i
l
'
]
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}

}

