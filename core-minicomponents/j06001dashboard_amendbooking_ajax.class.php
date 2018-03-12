
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
0
6
0
0
1
d
a
s
h
b
o
a
r
d
_
a
m
e
n
d
b
o
o
k
i
n
g
_
a
j
a
x

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

 
 
 
 
 
 
 
 
/
/
 
M
u
s
t
 
b
e
 
i
n
 
a
l
l
 
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
s
.
 
M
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
s
 
w
i
t
h
 
t
e
m
p
l
a
t
e
s
 
t
h
a
t
 
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
 
e
d
i
t
a
b
l
e
 
t
e
x
t
 
s
h
o
u
l
d
 
r
u
n
 
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
(
)
 
e
l
s
e
 
j
u
s
t
 
r
e
t
u
r
n

 
 
 
 
 
 
 
 
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
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
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
,
 
0
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
 
g
e
t
D
e
f
a
u
l
t
P
r
o
p
e
r
t
y
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
J
R
U
s
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
r
_
u
s
e
r
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
!
i
n
_
a
r
r
a
y
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
t
h
i
s
J
R
U
s
e
r
-
>
a
u
t
h
o
r
i
s
e
d
P
r
o
p
e
r
t
i
e
s
)
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
m
r
C
o
n
f
i
g
 
=
 
g
e
t
P
r
o
p
e
r
t
y
S
p
e
c
i
f
i
c
S
e
t
t
i
n
g
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
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
'
 
]
 
=
=
 
1
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
a
m
e
n
d
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
a
m
e
n
d
'
)
;

 
 
 
 
 
 
 
 
$
b
k
g
 
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
a
m
e
n
d
(
)
;


 
 
 
 
 
 
 
 
$
e
v
e
n
t
_
i
d
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
e
v
e
n
t
_
i
d
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
r
o
o
m
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
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
r
o
o
m
_
u
i
d
'
,
 
0
)
;

 
 
 
 
 
 
 
 
$
n
e
w
_
r
o
o
m
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
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
n
e
w
_
r
o
o
m
_
u
i
d
'
,
 
0
)
;

 
 
 
 
 
 
 
 
$
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
 
=
 
(
i
n
t
)
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
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
u
i
d
'
,
 
0
)
;

 
 
 
 
 
 
 
 
$
t
h
i
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
_
r
o
o
m
_
u
i
d
s
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
t
h
i
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
_
r
o
o
m
_
u
i
d
s
'
,
 
a
r
r
a
y
(
)
)
;


 
 
 
 
 
 
 
 
/
/
c
h
e
c
k
 
i
f
 
w
e
 
h
a
v
e
 
a
n
 
e
v
e
n
t
 
i
d
,
 
o
t
h
e
r
w
i
s
e
 
s
t
o
p
 
h
e
r
e

 
 
 
 
 
 
 
 
i
f
 
(
$
e
v
e
n
t
_
i
d
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
s
e
r
t
M
e
s
s
a
g
e
 
=
 
'
E
r
r
o
r
:
 
E
v
e
n
t
 
i
d
 
n
o
t
 
s
e
t
.
 
E
x
i
t
t
i
n
g
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
j
s
o
n
_
e
n
c
o
d
e
(
a
r
r
a
y
(
'
i
n
s
e
r
t
S
t
a
t
u
s
'
 
=
>
 
0
,
 
'
i
n
s
e
r
t
M
e
s
s
a
g
e
'
 
=
>
 
$
i
n
s
e
r
t
M
e
s
s
a
g
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
e
x
i
t
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
O
K
,
 
l
e
t
`
s
 
m
o
v
e
 
o
n
 
a
n
d
 
s
e
t
 
t
h
e
 
b
o
o
k
i
n
g
 
d
e
t
a
i
l
s

 
 
 
 
 
 
 
 
$
b
k
g
-
>
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
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
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
 
=
 
$
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
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
r
o
o
m
_
u
i
d
 
=
 
$
r
o
o
m
_
u
i
d
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
n
e
w
_
r
o
o
m
_
u
i
d
 
=
 
$
n
e
w
_
r
o
o
m
_
u
i
d
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
t
h
i
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
_
r
o
o
m
_
u
i
d
s
 
=
 
$
t
h
i
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
_
r
o
o
m
_
u
i
d
s
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
n
o
t
e
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
a
r
r
i
v
a
l
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
s
t
r
t
o
t
i
m
e
(
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
e
v
e
n
t
_
s
t
a
r
t
'
,
 
'
'
)
)
)
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
d
e
p
a
r
t
u
r
e
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
s
t
r
t
o
t
i
m
e
(
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
e
v
e
n
t
_
e
n
d
'
,
 
'
'
)
)
)
;


 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
m
r
C
o
n
f
i
g
[
 
'
w
h
o
l
e
d
a
y
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
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
l
a
s
t
_
b
o
o
k
e
d
_
d
a
t
e
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
s
t
r
t
o
t
i
m
e
(
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
e
v
e
n
t
_
e
n
d
'
,
 
'
'
)
)
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
l
a
s
t
_
b
o
o
k
e
d
_
d
a
t
e
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
s
t
r
t
o
t
i
m
e
(
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
e
v
e
n
t
_
e
n
d
'
,
 
'
'
)
.
'
-
1
 
d
a
y
'
)
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
f
r
o
m
 
=
 
d
a
t
e
(
'
Y
-
m
-
d
'
,
 
s
t
r
t
o
t
i
m
e
(
$
b
k
g
-
>
a
r
r
i
v
a
l
)
)
.
'
T
1
2
:
0
0
:
0
0
'
;

 
 
 
 
 
 
 
 
$
t
o
 
=
 
d
a
t
e
(
'
Y
-
m
-
d
'
,
 
s
t
r
t
o
t
i
m
e
(
$
b
k
g
-
>
d
e
p
a
r
t
u
r
e
)
)
.
'
T
1
1
:
5
9
:
5
9
'
;


 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
m
r
C
o
n
f
i
g
[
 
'
w
h
o
l
e
d
a
y
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
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
f
r
o
m
 
=
 
d
a
t
e
(
'
Y
-
m
-
d
'
,
 
s
t
r
t
o
t
i
m
e
(
$
b
k
g
-
>
a
r
r
i
v
a
l
)
)
.
'
T
0
0
:
0
0
:
0
1
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
 
=
 
d
a
t
e
(
'
Y
-
m
-
d
'
,
 
s
t
r
t
o
t
i
m
e
(
$
b
k
g
-
>
d
e
p
a
r
t
u
r
e
)
)
.
'
T
2
3
:
5
9
:
5
9
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
F
i
n
a
l
l
y
 
l
e
t
`
s
 
a
m
e
n
d
 
t
h
e
 
b
o
o
k
i
n
g

 
 
 
 
 
 
 
 
$
a
m
e
n
d
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
 
$
b
k
g
-
>
a
m
e
n
d
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
;


 
 
 
 
 
 
 
 
$
n
e
w
_
i
d
 
=
 
$
b
k
g
-
>
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
.
'
_
'
.
$
b
k
g
-
>
n
e
w
_
r
o
o
m
_
u
i
d
;


 
 
 
 
 
 
 
 
i
f
 
(
$
a
m
e
n
d
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
=
=
 
t
r
u
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
s
e
r
t
M
e
s
s
a
g
e
 
=
 
'
R
o
o
m
 
c
h
a
n
g
e
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
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
j
s
o
n
_
e
n
c
o
d
e
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
s
e
r
t
S
t
a
t
u
s
'
 
=
>
 
1
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
s
e
r
t
M
e
s
s
a
g
e
'
 
=
>
 
$
i
n
s
e
r
t
M
e
s
s
a
g
e
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
d
'
 
=
>
 
$
n
e
w
_
i
d
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
s
t
a
r
t
'
 
=
>
 
$
f
r
o
m
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
e
n
d
'
 
=
>
 
$
t
o
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
u
i
d
'
 
=
>
 
$
b
k
g
-
>
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
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
r
o
o
m
_
u
i
d
'
 
=
>
 
$
b
k
g
-
>
n
e
w
_
r
o
o
m
_
u
i
d
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
t
h
i
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
_
r
o
o
m
_
u
i
d
s
'
 
=
>
 
$
b
k
g
-
>
t
h
i
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
_
r
o
o
m
_
u
i
d
s
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
s
e
r
t
M
e
s
s
a
g
e
 
=
 
$
a
m
e
n
d
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

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
j
s
o
n
_
e
n
c
o
d
e
(
a
r
r
a
y
(
'
i
n
s
e
r
t
S
t
a
t
u
s
'
 
=
>
 
0
,
 
'
i
n
s
e
r
t
M
e
s
s
a
g
e
'
 
=
>
 
$
i
n
s
e
r
t
M
e
s
s
a
g
e
)
)
;

 
 
 
 
 
 
 
 
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

