
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
0
0
3
5
t
a
b
c
o
n
t
e
n
t
_
0
1
_
m
a
i
n
_
d
e
t
a
i
l
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
$
c
o
m
p
o
n
e
n
t
A
r
g
s
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
 
$
c
o
m
p
o
n
e
n
t
A
r
g
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


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
=
 
a
r
r
a
y
(
)
;


 
 
 
 
 
 
 
 
$
d
i
s
c
o
u
n
t
_
t
e
x
t
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
d
i
s
c
o
u
n
t
_
o
u
t
p
u
t
 
=
 
a
r
r
a
y
(
)
;


 
 
 
 
 
 
 
 
/
/
p
r
o
p
e
r
t
y
 
d
e
s
c
r
i
p
t
i
o
n

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
H
D
E
S
C
R
I
P
T
I
O
N
'
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
P
R
O
P
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
P
R
O
P
D
E
S
C
R
I
P
T
I
O
N
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
D
E
S
C
R
I
P
T
I
O
N
'
]
 
=
 
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
6
0
0
0
'
,
 
'
s
h
o
w
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
d
e
s
c
r
i
p
t
i
o
n
'
,
 
a
r
r
a
y
(
'
o
u
t
p
u
t
_
n
o
w
'
 
=
>
 
f
a
l
s
e
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
 
=
>
 
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
)
;


 
 
 
 
 
 
 
 
/
/
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
s

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
F
E
A
T
U
R
E
S
'
]
 
=
 
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
6
0
0
0
'
,
 
'
s
h
o
w
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
f
e
a
t
u
r
e
s
'
,
 
a
r
r
a
y
(
'
o
u
t
p
u
t
_
n
o
w
'
 
=
>
 
f
a
l
s
e
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
 
=
>
 
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
)
;


 
 
 
 
 
 
 
 
/
/
r
o
o
m
 
t
y
p
e
s

 
 
 
 
 
 
 
 
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
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
R
O
O
M
_
T
Y
P
E
S
'
]
 
=
 
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
6
0
0
0
'
,
 
'
s
h
o
w
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
r
o
o
m
_
t
y
p
e
s
'
,
 
a
r
r
a
y
(
'
o
u
t
p
u
t
_
n
o
w
'
 
=
>
 
f
a
l
s
e
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
 
=
>
 
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
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
R
O
O
M
_
T
Y
P
E
S
'
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
p
r
o
p
e
r
t
y
 
d
i
s
c
o
u
n
t
s

 
 
 
 
 
 
 
 
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
'
0
1
0
1
1
'
,
 
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
'
0
'
 
=
>
 
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
)
)
;

 
 
 
 
 
 
 
 
$
d
i
s
c
o
u
n
t
 
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
l
i
s
t
_
d
i
s
c
o
u
n
t
s
'
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
d
i
s
c
o
u
n
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
d
i
s
c
o
u
n
t
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
[
'
d
i
s
c
o
u
n
t
_
t
y
p
e
'
]
 
=
=
 
'
l
a
s
t
m
i
n
u
t
e
a
c
t
i
v
e
'
)
 
{
 
/
/
 
U
s
i
n
g
 
l
a
s
t
 
m
i
n
u
t
e
 
c
a
l
c
u
l
a
t
i
o
n
s

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
s
t
m
i
n
u
t
e
t
h
r
e
s
h
o
l
d
 
=
 
$
d
i
s
c
o
u
n
t
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
[
'
l
a
s
t
m
i
n
u
t
e
t
h
r
e
s
h
o
l
d
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
s
t
m
i
n
u
t
e
d
i
s
c
o
u
n
t
 
=
 
$
d
i
s
c
o
u
n
t
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
[
'
l
a
s
t
m
i
n
u
t
e
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
o
d
a
y
s
D
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
t
o
d
a
y
s
D
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
u
n
i
x
T
o
d
a
y
s
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
 
+
 
$
l
a
s
t
m
i
n
u
t
e
t
h
r
e
s
h
o
l
d
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
t
e
s
t
D
a
t
e
 
=
 
J
S
C
a
l
m
a
k
e
I
n
p
u
t
D
a
t
e
s
(
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
 
$
u
n
i
x
T
o
d
a
y
s
D
a
t
e
)
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
s
c
o
u
n
t
_
t
e
x
t
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
P
R
E
'
,
 
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
P
R
E
'
,
 
f
a
l
s
e
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
s
c
o
u
n
t
_
t
e
x
t
 
.
=
 
$
l
a
s
t
m
i
n
u
t
e
d
i
s
c
o
u
n
t
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
s
c
o
u
n
t
_
t
e
x
t
 
.
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
M
I
D
'
,
 
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
M
I
D
'
,
 
f
a
l
s
e
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
s
c
o
u
n
t
_
t
e
x
t
 
.
=
 
$
l
a
t
e
s
t
D
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
s
c
o
u
n
t
_
t
e
x
t
 
.
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
P
O
S
T
'
,
 
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
P
O
S
T
'
,
 
f
a
l
s
e
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{
 
/
/
 
U
s
i
n
g
 
w
i
s
e
p
r
i
c
e
 
c
a
l
c
u
l
a
t
i
o
n
s

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
i
s
e
p
r
i
c
e
t
h
r
e
s
h
o
l
d
 
=
 
$
d
i
s
c
o
u
n
t
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
[
'
w
i
s
e
p
r
i
c
e
t
h
r
e
s
h
o
l
d
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
i
s
e
p
r
i
c
e
d
i
s
c
o
u
n
t
 
=
 
$
d
i
s
c
o
u
n
t
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
[
'
w
i
s
e
p
r
i
c
e
7
5
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
o
d
a
y
s
D
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
t
o
d
a
y
s
D
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
u
n
i
x
T
o
d
a
y
s
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
 
+
 
$
w
i
s
e
p
r
i
c
e
t
h
r
e
s
h
o
l
d
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
t
e
s
t
D
a
t
e
 
=
 
J
S
C
a
l
m
a
k
e
I
n
p
u
t
D
a
t
e
s
(
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
 
$
u
n
i
x
T
o
d
a
y
s
D
a
t
e
)
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
s
c
o
u
n
t
_
t
e
x
t
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
P
R
E
'
,
 
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
P
R
E
'
,
 
f
a
l
s
e
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
s
c
o
u
n
t
_
t
e
x
t
 
.
=
 
(
f
l
o
a
t
)
 
$
w
i
s
e
p
r
i
c
e
d
i
s
c
o
u
n
t
.
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
O
R
M
O
R
E
'
,
 
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
O
R
M
O
R
E
'
,
 
f
a
l
s
e
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
s
c
o
u
n
t
_
t
e
x
t
 
.
=
 
$
l
a
t
e
s
t
D
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
s
c
o
u
n
t
_
t
e
x
t
 
.
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
P
O
S
T
'
,
 
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
P
O
S
T
'
,
 
f
a
l
s
e
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
$
d
i
s
c
o
u
n
t
_
t
e
x
t
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
s
c
o
u
n
t
_
o
u
t
p
u
t
[
 
]
 
=
 
a
r
r
a
y
(
'
D
I
S
C
O
U
N
T
_
O
U
T
P
U
T
'
 
=
>
 
$
d
i
s
c
o
u
n
t
_
t
e
x
t
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
[
 
]
 
=
 
$
o
u
t
p
u
t
;

 
 
 
 
 
 
 
 
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
t
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
d
i
s
c
o
u
n
t
_
t
e
x
t
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
d
i
s
c
o
u
n
t
_
o
u
t
p
u
t
'
,
 
$
d
i
s
c
o
u
n
t
_
o
u
t
p
u
t
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
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
L
A
T
E
P
A
T
H
_
F
R
O
N
T
E
N
D
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
t
a
b
c
o
n
t
e
n
t
_
0
1
_
m
a
i
n
_
d
e
t
a
i
l
s
.
h
t
m
l
'
)
;


 
 
 
 
 
 
 
 
$
p
a
r
s
e
d
T
e
m
p
l
a
t
e
 
=
 
$
t
m
p
l
-
>
g
e
t
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;


 
 
 
 
 
 
 
 
$
a
n
c
h
o
r
 
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
n
e
r
a
t
e
_
t
a
b
_
a
n
c
h
o
r
(
$
o
u
t
p
u
t
[
 
'
H
D
E
S
C
R
I
P
T
I
O
N
'
 
]
)
;

 
 
 
 
 
 
 
 
$
t
a
b
 
=
 
a
r
r
a
y
(
'
T
A
B
_
A
N
C
H
O
R
'
 
=
>
 
$
a
n
c
h
o
r
,
 
'
T
A
B
_
T
I
T
L
E
'
 
=
>
 
$
o
u
t
p
u
t
[
 
'
H
D
E
S
C
R
I
P
T
I
O
N
'
 
]
,
 
'
T
A
B
_
C
O
N
T
E
N
T
'
 
=
>
 
$
p
a
r
s
e
d
T
e
m
p
l
a
t
e
,
 
'
T
A
B
_
I
D
'
 
=
>
 
'
t
o
u
r
_
t
a
r
g
e
t
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
d
e
t
a
i
l
s
_
m
a
i
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
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
=
 
$
t
a
b
;

 
 
 
 
}


/
*
*

 
*
 
M
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
 
m
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
.

 
#

 
*
 
R
e
t
u
r
n
s
 
a
n
y
 
s
e
t
t
i
n
g
s
 
t
h
e
 
t
h
e
 
m
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
 
w
a
n
t
s
 
t
o
 
s
e
n
d
 
b
a
c
k
 
t
o
 
t
h
e
 
c
a
l
l
i
n
g
 
s
c
r
i
p
t
.
 
I
n
 
a
d
d
i
t
i
o
n
 
t
o
 
b
e
i
n
g
 
r
e
t
u
r
n
e
d
 
t
o
 
t
h
e
 
c
a
l
l
i
n
g
 
s
c
r
i
p
t
 
t
h
e
y
 
a
r
e
 
p
u
t
 
i
n
t
o
 
a
n
 
a
r
r
a
y
 
i
n
 
t
h
e
 
m
c
H
a
n
d
l
e
r
 
o
b
j
e
c
t
 
a
s
 
e
g
.
 
$
m
c
H
a
n
d
l
e
r
-
>
m
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
D
a
t
a
[
$
e
P
o
i
n
t
]
[
$
e
N
a
m
e
]

 
*
/

 
 
 
 
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
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
;

 
 
 
 
}

}

