
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
1
6
0
0
0
v
i
e
w
_
i
n
v
o
i
c
e

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
i
n
v
o
i
c
e
_
i
d
 
=
 
i
n
t
v
a
l
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
R
E
Q
U
E
S
T
,
 
'
i
d
'
,
 
0
)
)
;

 
 
 
 
 
 
 
 
$
p
o
p
u
p
 
=
 
i
n
t
v
a
l
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
R
E
Q
U
E
S
T
,
 
'
p
o
p
u
p
'
,
 
0
)
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
r
o
w
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

 
 
 
 
 
 
 
 
$
t
r
a
n
s
a
c
t
i
o
n
_
r
o
w
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
i
n
v
o
i
c
e
_
i
d
 
=
=
 
0
)
 
{
 
/
/
n
o
 
i
n
v
o
i
c
e
 
i
d
 
p
a
s
s
e
d
,
 
s
o
 
n
o
t
h
i
n
g
 
t
o
 
d
i
s
p
l
a
y

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
g
a
t
h
e
r
 
t
h
e
 
i
n
v
o
i
c
e
 
d
a
t
a

 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
 
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
b
a
s
i
c
_
i
n
v
o
i
c
e
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
i
n
v
o
i
c
e
-
>
g
a
t
h
e
r
D
a
t
a
(
$
i
n
v
o
i
c
e
_
i
d
)
;


 
 
 
 
 
 
 
 
/
/
s
i
t
e
 
b
u
s
i
n
e
s
s
 
d
e
t
a
i
l
s

 
 
 
 
 
 
 
 
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


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
S
I
T
E
_
B
U
S
I
N
E
S
S
_
N
A
M
E
'
 
]
 
=
 
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
b
u
s
i
n
e
s
s
_
n
a
m
e
'
 
]
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
S
I
T
E
_
B
U
S
I
N
E
S
S
_
H
O
U
S
E
N
O
'
 
]
 
=
 
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
b
u
s
i
n
e
s
s
_
a
d
d
r
e
s
s
'
 
]
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
S
I
T
E
_
B
U
S
I
N
E
S
S
_
S
T
R
E
E
T
'
 
]
 
=
 
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
b
u
s
i
n
e
s
s
_
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
o
u
t
p
u
t
[
 
'
S
I
T
E
_
B
U
S
I
N
E
S
S
_
T
O
W
N
'
 
]
 
=
 
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
b
u
s
i
n
e
s
s
_
t
o
w
n
'
 
]
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
S
I
T
E
_
B
U
S
I
N
E
S
S
_
R
E
G
I
O
N
'
 
]
 
=
 
f
i
n
d
_
r
e
g
i
o
n
_
n
a
m
e
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
b
u
s
i
n
e
s
s
_
r
e
g
i
o
n
'
 
]
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
S
I
T
E
_
B
U
S
I
N
E
S
S
_
C
O
U
N
T
R
Y
'
 
]
 
=
 
g
e
t
S
i
m
p
l
e
C
o
u
n
t
r
y
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
b
u
s
i
n
e
s
s
_
c
o
u
n
t
r
y
'
 
]
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
S
I
T
E
_
B
U
S
I
N
E
S
S
_
P
O
S
T
C
O
D
E
'
 
]
 
=
 
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
b
u
s
i
n
e
s
s
_
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
o
u
t
p
u
t
[
 
'
S
I
T
E
_
B
U
S
I
N
E
S
S
_
T
E
L
E
P
H
O
N
E
'
 
]
 
=
 
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
b
u
s
i
n
e
s
s
_
t
e
l
e
p
h
o
n
e
'
 
]
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
S
I
T
E
_
B
U
S
I
N
E
S
S
_
E
M
A
I
L
'
 
]
 
=
 
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
b
u
s
i
n
e
s
s
_
e
m
a
i
l
'
 
]
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
S
I
T
E
_
B
U
S
I
N
E
S
S
_
V
A
T
N
O
'
 
]
 
=
 
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
b
u
s
i
n
e
s
s
_
v
a
t
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


 
 
 
 
 
 
 
 
/
/
m
a
n
a
g
e
r
/
c
l
i
e
n
t
 
b
u
s
i
n
e
s
s
 
d
e
t
a
i
l
s

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
f
i
r
s
t
n
a
m
e
,
s
u
r
n
a
m
e
,
h
o
u
s
e
,
s
t
r
e
e
t
,
t
o
w
n
,
c
o
u
n
t
y
,
c
o
u
n
t
r
y
,
p
o
s
t
c
o
d
e
,
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
,
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
,
e
m
a
i
l
,
v
a
t
_
n
u
m
b
e
r
 
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
g
u
e
s
t
_
p
r
o
f
i
l
e
 
W
H
E
R
E
 
c
m
s
_
u
s
e
r
_
i
d
 
=
 
'
.
(
i
n
t
)
 
$
i
n
v
o
i
c
e
-
>
c
m
s
_
u
s
e
r
_
i
d
.
'
'
;

 
 
 
 
 
 
 
 
$
m
a
n
a
g
e
r
D
a
t
a
 
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
m
a
n
a
g
e
r
D
a
t
a
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
m
a
n
a
g
e
r
D
a
t
a
 
a
s
 
$
d
a
t
a
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
F
I
R
S
T
N
A
M
E
'
 
]
 
=
 
$
d
a
t
a
-
>
f
i
r
s
t
n
a
m
e
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
S
U
R
N
A
M
E
'
 
]
 
=
 
$
d
a
t
a
-
>
s
u
r
n
a
m
e
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
H
O
U
S
E
'
 
]
 
=
 
$
d
a
t
a
-
>
h
o
u
s
e
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
S
T
R
E
E
T
'
 
]
 
=
 
$
d
a
t
a
-
>
s
t
r
e
e
t
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
T
O
W
N
'
 
]
 
=
 
$
d
a
t
a
-
>
t
o
w
n
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
R
E
G
I
O
N
'
 
]
 
=
 
f
i
n
d
_
r
e
g
i
o
n
_
n
a
m
e
(
$
d
a
t
a
-
>
c
o
u
n
t
y
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
C
O
U
N
T
R
Y
'
 
]
 
=
 
g
e
t
S
i
m
p
l
e
C
o
u
n
t
r
y
(
$
d
a
t
a
-
>
c
o
u
n
t
r
y
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
P
O
S
T
C
O
D
E
'
 
]
 
=
 
$
d
a
t
a
-
>
p
o
s
t
c
o
d
e
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
L
A
N
D
L
I
N
E
'
 
]
 
=
 
$
d
a
t
a
-
>
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
M
O
B
I
L
E
'
 
]
 
=
 
$
d
a
t
a
-
>
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
E
M
A
I
L
'
 
]
 
=
 
$
d
a
t
a
-
>
e
m
a
i
l
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
V
A
T
N
O
'
 
]
 
=
 
$
d
a
t
a
-
>
v
a
t
_
n
u
m
b
e
r
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
t
o
o
l
b
a
r

 
 
 
 
 
 
 
 
i
f
 
(
$
p
o
p
u
p
 
!
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
t
b
a
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
o
o
l
b
a
r
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
t
b
 
=
 
$
j
r
t
b
a
r
-
>
s
t
a
r
t
T
a
b
l
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
i
n
v
o
i
c
e
-
>
s
t
a
t
u
s
 
!
=
 
1
 
&
&
 
$
i
n
v
o
i
c
e
-
>
r
a
i
s
e
d
_
d
a
t
e
 
>
 
'
1
9
7
0
-
0
1
-
0
1
 
0
0
:
0
0
:
0
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
t
o
o
l
b
a
r
I
t
e
m
(
'
s
a
v
e
'
,
 
j
o
m
r
e
s
U
r
l
(
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
D
M
I
N
.
'
&
t
a
s
k
=
m
a
r
k
_
i
n
v
o
i
c
e
_
p
a
i
d
&
i
d
=
'
.
$
i
n
v
o
i
c
e
-
>
i
d
)
,
 
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
I
N
V
O
I
C
E
_
M
A
R
K
A
S
P
A
I
D
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
I
N
V
O
I
C
E
_
M
A
R
K
A
S
P
A
I
D
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
/
/
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
t
o
o
l
b
a
r
I
t
e
m
(
 
'
p
r
i
n
t
e
r
'
,
 
j
o
m
r
e
s
U
r
l
(
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
D
M
I
N
 
.
 
'
&
t
m
p
l
=
'
 
.
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
t
m
p
l
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
)
 
.
 
'
&
p
o
p
u
p
=
1
&
t
a
s
k
=
v
i
e
w
_
i
n
v
o
i
c
e
&
i
d
=
'
 
.
 
$
i
n
v
o
i
c
e
-
>
i
d
)
,
 
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
I
N
V
O
I
C
E
_
P
R
I
N
T
'
,
 
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
I
N
V
O
I
C
E
_
P
R
I
N
T
,
 
f
a
l
s
e
)
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
t
o
o
l
b
a
r
I
t
e
m
(
'
c
a
n
c
e
l
'
,
 
j
o
m
r
e
s
U
R
L
(
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
D
M
I
N
.
'
&
t
a
s
k
=
l
i
s
t
_
i
n
v
o
i
c
e
s
'
)
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
e
n
d
T
a
b
l
e
(
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
J
O
M
R
E
S
T
O
O
L
B
A
R
'
 
]
 
=
 
$
j
r
t
b
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
J
O
M
R
E
S
T
O
O
L
B
A
R
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
B
U
S
I
N
E
S
S
N
A
M
E
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
Y
O
U
R
B
U
S
I
N
E
S
S
_
N
A
M
E
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
Y
O
U
R
B
U
S
I
N
E
S
S
_
N
A
M
E
'
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
T
I
T
L
E
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
E
D
I
T
B
O
O
K
I
N
G
_
T
A
B
_
G
U
E
S
T
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
E
D
I
T
B
O
O
K
I
N
G
_
T
A
B
_
G
U
E
S
T
'
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
H
F
I
R
S
T
N
A
M
E
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
I
E
W
B
O
O
K
I
N
G
S
_
S
U
R
N
A
M
E
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
I
E
W
B
O
O
K
I
N
G
S
_
S
U
R
N
A
M
E
'
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
H
S
U
R
N
A
M
E
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
D
I
S
P
G
U
E
S
T
_
S
U
R
N
A
M
E
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
D
I
S
P
G
U
E
S
T
_
S
U
R
N
A
M
E
'
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
H
V
A
T
N
O
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
Y
O
U
R
B
U
S
I
N
E
S
S
_
V
A
T
N
O
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
Y
O
U
R
B
U
S
I
N
E
S
S
_
V
A
T
N
O
'
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
H
H
O
U
S
E
N
O
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
Y
O
U
R
B
U
S
I
N
E
S
S
A
D
D
R
E
S
S
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
Y
O
U
R
B
U
S
I
N
E
S
S
A
D
D
R
E
S
S
'
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
H
S
T
R
E
E
T
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
S
T
R
E
E
T
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
S
T
R
E
E
T
'
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
H
T
O
W
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
T
O
W
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
T
O
W
N
'
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
H
R
E
G
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
R
E
G
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
R
E
G
I
O
N
'
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
H
C
O
U
N
T
R
Y
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
C
O
U
N
T
R
Y
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
C
O
U
N
T
R
Y
'
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
H
P
O
S
T
C
O
D
E
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
O
S
T
C
O
D
E
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
O
S
T
C
O
D
E
'
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
H
T
E
L
E
P
H
O
N
E
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
T
E
L
E
P
H
O
N
E
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
T
E
L
E
P
H
O
N
E
'
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
H
E
M
A
I
L
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
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
E
M
A
I
L
_
E
X
P
L
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
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
E
M
A
I
L
_
E
X
P
L
'
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
H
L
A
N
D
L
I
N
E
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
D
I
S
P
G
U
E
S
T
_
L
A
N
D
L
I
N
E
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
D
I
S
P
G
U
E
S
T
_
L
A
N
D
L
I
N
E
'
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
H
M
O
B
I
L
E
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
D
I
S
P
G
U
E
S
T
_
M
O
B
I
L
E
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
D
I
S
P
G
U
E
S
T
_
M
O
B
I
L
E
'
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
H
F
A
X
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
D
I
S
P
G
U
E
S
T
_
F
A
X
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
D
I
S
P
G
U
E
S
T
_
F
A
X
'
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
P
A
G
E
T
I
T
L
E
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
I
N
V
O
I
C
E
_
T
I
T
L
E
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
I
N
V
O
I
C
E
_
T
I
T
L
E
'
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
H
I
N
V
O
I
C
E
_
T
R
A
N
S
A
C
T
I
O
N
S
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
I
N
V
O
I
C
E
_
T
R
A
N
S
A
C
T
I
O
N
S
'
,
 
'
_
I
N
V
O
I
C
E
_
T
R
A
N
S
A
C
T
I
O
N
S
'
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
H
U
S
E
R
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
U
S
E
R
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
U
S
E
R
'
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
H
S
T
A
T
U
S
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
'
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
H
R
A
I
S
E
D
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
R
A
I
S
E
D
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
R
A
I
S
E
D
'
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
H
D
U
E
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
D
U
E
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
D
U
E
'
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
H
S
U
B
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
U
B
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
U
B
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
H
I
N
I
T
T
O
T
A
L
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
I
N
I
T
T
O
T
A
L
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
I
N
I
T
T
O
T
A
L
'
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
H
C
U
R
R
E
N
C
Y
C
O
D
E
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
C
U
R
R
E
N
C
Y
C
O
D
E
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
C
U
R
R
E
N
C
Y
C
O
D
E
'
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
H
I
N
V
O
I
C
E
N
O
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
I
N
V
O
I
C
E
_
N
U
M
B
E
R
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
I
N
V
O
I
C
E
_
N
U
M
B
E
R
'
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
T
R
A
N
S
A
C
T
I
O
N
_
I
D
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
T
R
A
N
S
A
C
T
I
O
N
_
I
D
S
'
,
 
'
T
R
A
N
S
A
C
T
I
O
N
_
I
D
S
'
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
P
A
Y
M
E
N
T
_
M
E
T
H
O
D
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
P
A
Y
M
E
N
T
_
M
E
T
H
O
D
'
,
 
'
P
A
Y
M
E
N
T
_
M
E
T
H
O
D
'
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
I
D
'
 
]
 
=
 
$
i
n
v
o
i
c
e
-
>
i
d
;


 
 
 
 
 
 
 
 
/
/
 
I
n
v
o
i
c
e
 
s
t
a
t
u
s
:

 
 
 
 
 
 
 
 
/
/
 
0
 
u
n
p
a
i
d

 
 
 
 
 
 
 
 
/
/
 
1
 
p
a
i
d

 
 
 
 
 
 
 
 
/
/
 
2
 
c
a
n
c
e
l
l
e
d

 
 
 
 
 
 
 
 
/
/
 
3
 
p
e
n
d
i
n
g

 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
i
n
v
o
i
c
e
-
>
s
t
a
t
u
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
0
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
L
A
B
E
L
_
C
L
A
S
S
'
 
]
 
=
 
'
l
a
b
e
l
-
r
e
d
'
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
S
T
A
T
U
S
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
U
N
P
A
I
D
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
U
N
P
A
I
D
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
1
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
L
A
B
E
L
_
C
L
A
S
S
'
 
]
 
=
 
'
l
a
b
e
l
-
g
r
e
e
n
'
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
S
T
A
T
U
S
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
P
A
I
D
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
P
A
I
D
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
2
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
L
A
B
E
L
_
C
L
A
S
S
'
 
]
 
=
 
'
l
a
b
e
l
-
b
l
a
c
k
'
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
S
T
A
T
U
S
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
C
A
N
C
E
L
L
E
D
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
C
A
N
C
E
L
L
E
D
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
a
u
l
t
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
L
A
B
E
L
_
C
L
A
S
S
'
 
]
 
=
 
'
l
a
b
e
l
-
o
r
a
n
g
e
'
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
S
T
A
T
U
S
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
P
E
N
D
I
N
G
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
P
E
N
D
I
N
G
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
U
S
E
R
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
U
S
E
R
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
U
S
E
R
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 

	
	
i
f
 
(
$
i
n
v
o
i
c
e
-
>
r
a
i
s
e
d
_
d
a
t
e
 
!
=
 
'
1
9
7
0
-
0
1
-
0
1
 
0
0
:
0
0
:
0
1
'
)

	
	
	
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
A
I
S
E
D
'
 
]
 
=
 
$
i
n
v
o
i
c
e
-
>
r
a
i
s
e
d
_
d
a
t
e
;

	
	
e
l
s
e

	
	
	
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
A
I
S
E
D
'
 
]
 
=
 
'
'
;

	
	

	
	
i
f
 
(
$
i
n
v
o
i
c
e
-
>
d
u
e
_
d
a
t
e
 
!
=
 
'
1
9
7
0
-
0
1
-
0
1
 
0
0
:
0
0
:
0
1
'
)

	
	
	
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
U
E
'
 
]
 
=
 
$
i
n
v
o
i
c
e
-
>
d
u
e
_
d
a
t
e
;

	
	
e
l
s
e

	
	
	
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
U
E
'
 
]
 
=
 
'
'
;


 
 
 
 
 
 
 
 
/
/
 
S
e
e
 
n
o
t
e
 
a
t
 
t
h
e
 
e
n
d
 
o
f
 
t
h
i
s
 
l
i
n
e
!

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
I
N
I
T
T
O
T
A
L
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
i
n
v
o
i
c
e
-
>
i
n
i
t
_
t
o
t
a
l
,
 
$
i
n
v
o
i
c
e
-
>
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
,
 
t
r
u
e
,
 
t
r
u
e
)
;
 
/
/
 
T
h
i
s
 
i
s
 
n
o
w
 
w
r
o
n
g
.
 
T
h
e
 
i
n
i
t
 
t
o
t
a
l
 
i
s
 
c
a
l
c
u
l
a
t
e
d
 
w
h
e
n
 
t
h
e
 
i
n
v
o
i
c
e
 
i
s
 
g
e
n
e
r
a
t
e
d
,
 
b
u
t
 
r
e
c
e
n
t
 
V
A
T
 
r
e
l
a
t
e
d
 
c
h
a
n
g
e
s
 
m
e
a
n
 
t
h
a
t
 
o
n
 
o
l
d
e
r
 
i
n
v
o
i
c
e
s
 
w
h
i
c
h
 
w
e
r
e
 
c
r
e
a
t
e
d
 
b
e
f
o
r
e
 
t
h
e
 
V
A
T
 
c
h
a
n
g
e
s
 
w
e
r
e
 
a
d
d
e
d
,
 
i
t
'
s
 
p
o
s
s
i
b
l
e
 
t
h
a
t
 
t
h
i
s
 
s
u
m
 
i
s
 
i
n
c
o
r
r
e
c
t
.
 
T
h
e
 
n
e
w
e
r
 
G
R
A
N
D
_
T
O
T
A
L
_
I
N
C
_
T
A
X
 
o
u
t
p
u
t
 
v
a
r
i
a
b
l
e
 
i
s
 
c
o
r
r
e
c
t
,
 
a
s
 
i
t
'
s
 
a
d
j
u
s
t
e
d
 
a
c
c
o
r
d
i
n
g
 
t
o
 
t
h
e
 
V
A
T
 
r
u
l
e
s
,
 
s
o
 
w
e
'
l
l
 
r
e
p
l
a
c
e
 
I
N
I
T
T
O
T
A
L
 
w
i
t
h
 
G
R
A
N
D
_
T
O
T
A
L
_
I
N
C
_
T
A
X
 
i
n
 
i
n
v
o
i
c
e
 
t
e
m
p
l
a
t
e
 
f
i
l
e
s
.


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
C
U
R
R
E
N
C
Y
C
O
D
E
'
 
]
 
=
 
$
i
n
v
o
i
c
e
-
>
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
L
I
P
A
G
E
T
I
T
L
E
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
'
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
H
L
I
_
N
A
M
E
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
N
A
M
E
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
N
A
M
E
'
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
H
L
I
_
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
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
H
C
U
R
R
E
N
C
Y
C
O
D
E
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
C
U
R
R
E
N
C
Y
C
O
D
E
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
C
U
R
R
E
N
C
Y
C
O
D
E
'
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
H
L
I
_
I
N
I
T
_
P
R
I
C
E
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
I
N
I
T
_
P
R
I
C
E
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
I
N
I
T
_
P
R
I
C
E
'
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
H
L
I
_
I
N
I
T
_
Q
T
Y
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
I
N
I
T
_
Q
T
Y
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
I
N
I
T
_
Q
T
Y
'
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
H
L
I
_
I
N
I
T
_
D
I
S
C
O
U
N
T
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
I
N
I
T
_
D
I
S
C
O
U
N
T
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
I
N
I
T
_
D
I
S
C
O
U
N
T
'
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
H
L
I
_
I
N
I
T
_
T
O
T
A
L
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
I
N
I
T
_
T
O
T
A
L
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
I
N
I
T
_
T
O
T
A
L
'
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
H
L
I
_
I
N
I
T
_
T
O
T
A
L
_
I
N
C
L
U
S
I
V
E
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
L
I
N
E
I
T
E
M
_
T
O
T
A
L
_
I
N
C
L
U
D
I
N
G
T
A
X
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
L
I
N
E
I
T
E
M
_
T
O
T
A
L
_
I
N
C
L
U
D
I
N
G
T
A
X
'
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
H
L
I
_
T
A
X
_
C
O
D
E
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
T
A
X
_
C
O
D
E
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
T
A
X
_
C
O
D
E
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
H
L
I
_
T
A
X
_
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
T
A
X
_
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
T
A
X
_
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
H
L
I
_
T
A
X
_
R
A
T
E
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
T
A
X
_
R
A
T
E
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
T
A
X
_
R
A
T
E
'
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
H
L
I
_
T
A
X
_
A
M
O
U
N
T
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
F
R
O
N
T
_
R
O
O
M
T
A
X
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
F
R
O
N
T
_
R
O
O
M
T
A
X
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
i
n
v
o
i
c
e
-
>
l
i
n
e
i
t
e
m
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
i
n
v
o
i
c
e
-
>
l
i
n
e
i
t
e
m
s
 
a
s
 
$
l
i
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
 
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
r
[
 
'
I
D
'
 
]
 
=
 
$
l
i
[
 
'
i
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
L
I
_
N
A
M
E
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
$
l
i
[
 
'
n
a
m
e
'
 
]
,
 
$
l
i
[
 
'
n
a
m
e
'
 
]
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
L
I
_
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
l
i
[
 
'
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
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
L
I
_
I
N
I
T
_
P
R
I
C
E
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
l
i
[
 
'
i
n
i
t
_
p
r
i
c
e
'
 
]
,
 
$
i
n
v
o
i
c
e
-
>
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
r
[
 
'
L
I
_
I
N
I
T
_
Q
T
Y
'
 
]
 
=
 
$
l
i
[
 
'
i
n
i
t
_
q
t
y
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
L
I
_
I
N
I
T
_
D
I
S
C
O
U
N
T
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
l
i
[
 
'
i
n
i
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
'
 
]
,
 
$
i
n
v
o
i
c
e
-
>
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
r
[
 
'
L
I
_
I
N
I
T
_
T
O
T
A
L
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
l
i
[
 
'
i
n
i
t
_
t
o
t
a
l
'
 
]
,
 
$
i
n
v
o
i
c
e
-
>
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


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
i
n
v
o
i
c
e
-
>
v
a
t
_
w
i
l
l
_
b
e
_
c
h
a
r
g
e
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
L
I
_
I
N
I
T
_
T
O
T
A
L
_
I
N
C
L
U
S
I
V
E
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
l
i
[
 
'
i
n
i
t
_
t
o
t
a
l
_
i
n
c
l
u
s
i
v
e
'
 
]
,
 
$
i
n
v
o
i
c
e
-
>
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
r
[
 
'
L
I
_
T
A
X
_
R
A
T
E
'
 
]
 
=
 
$
l
i
[
 
'
t
a
x
_
r
a
t
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
L
I
_
I
N
I
T
_
T
O
T
A
L
_
I
N
C
L
U
S
I
V
E
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
l
i
[
 
'
i
n
i
t
_
t
o
t
a
l
'
 
]
,
 
$
i
n
v
o
i
c
e
-
>
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
r
[
 
'
L
I
_
T
A
X
_
R
A
T
E
'
 
]
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
L
I
_
T
A
X
_
C
O
D
E
'
 
]
 
=
 
$
l
i
[
 
'
t
a
x
_
c
o
d
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
L
I
_
T
A
X
_
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
l
i
[
 
'
t
a
x
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
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
L
I
_
T
A
X
_
A
M
O
U
N
T
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
l
i
[
 
'
t
a
x
_
a
m
o
u
n
t
'
 
]
,
 
$
i
n
v
o
i
c
e
-
>
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
r
[
 
'
L
I
_
I
N
V
_
I
D
'
 
]
 
=
 
$
l
i
[
 
'
i
n
v
_
i
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
C
U
R
R
E
N
C
Y
C
O
D
E
'
 
]
 
=
 
$
i
n
v
o
i
c
e
-
>
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
;

	
	
	
	
$
r
[
 
'
T
R
A
N
S
A
C
T
I
O
N
_
I
D
'
 
]
 
=
 
$
l
i
[
 
'
t
r
a
n
s
a
c
t
i
o
n
_
i
d
'
 
]
;

	
	
	
	
$
r
[
 
'
P
A
Y
M
E
N
T
_
M
E
T
H
O
D
'
 
]
 
=
 
$
l
i
[
 
'
p
a
y
m
e
n
t
_
m
e
t
h
o
d
'
 
]
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
l
i
[
 
'
i
s
_
p
a
y
m
e
n
t
'
 
]
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
w
s
[
]
 
=
 
$
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
r
a
n
s
a
c
t
i
o
n
_
r
o
w
s
[
]
 
=
 
$
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
J
O
M
R
E
S
_
G
R
A
N
D
T
O
T
A
L
_
T
O
T
A
L
_
T
A
X
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
J
O
M
R
E
S
_
G
R
A
N
D
T
O
T
A
L
_
T
O
T
A
L
_
T
A
X
'
,
 
'
J
O
M
R
E
S
_
G
R
A
N
D
T
O
T
A
L
_
T
O
T
A
L
_
T
A
X
'
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
J
O
M
R
E
S
_
G
R
A
N
D
T
O
T
A
L
_
E
X
_
T
A
X
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
J
O
M
R
E
S
_
G
R
A
N
D
T
O
T
A
L
_
E
X
_
T
A
X
'
,
 
'
J
O
M
R
E
S
_
G
R
A
N
D
T
O
T
A
L
_
E
X
_
T
A
X
'
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
J
O
M
R
E
S
_
G
R
A
N
D
T
O
T
A
L
_
I
N
C
_
T
A
X
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
J
O
M
R
E
S
_
G
R
A
N
D
T
O
T
A
L
_
I
N
C
_
T
A
X
'
,
 
'
J
O
M
R
E
S
_
G
R
A
N
D
T
O
T
A
L
_
I
N
C
_
T
A
X
'
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
G
R
A
N
D
_
T
O
T
A
L
_
I
N
C
_
T
A
X
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
i
n
v
o
i
c
e
-
>
g
r
a
n
d
_
t
o
t
a
l
_
i
n
c
_
t
a
x
,
 
$
i
n
v
o
i
c
e
-
>
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
o
u
t
p
u
t
[
 
'
G
R
A
N
D
_
T
O
T
A
L
_
E
X
_
T
A
X
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
i
n
v
o
i
c
e
-
>
g
r
a
n
d
_
t
o
t
a
l
_
e
x
_
t
a
x
,
 
$
i
n
v
o
i
c
e
-
>
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
o
u
t
p
u
t
[
 
'
G
R
A
N
D
_
T
O
T
A
L
_
T
A
X
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
i
n
v
o
i
c
e
-
>
g
r
a
n
d
_
t
o
t
a
l
_
t
a
x
,
 
$
i
n
v
o
i
c
e
-
>
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
o
u
t
p
u
t
[
 
'
O
U
T
S
T
A
N
D
I
N
G
_
T
O
T
A
L
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
i
n
v
o
i
c
e
-
>
b
a
l
a
n
c
e
,
 
$
i
n
v
o
i
c
e
-
>
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

	
	

	
	
/
/
i
n
v
o
i
c
e
 
l
o
g
o

	
	
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
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
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
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
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
g
e
t
_
s
i
t
e
_
i
m
a
g
e
s
(
'
l
o
g
o
'
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
L
O
G
O
'
 
]
 
=
 
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
 
[
 
'
n
o
i
m
a
g
e
-
s
m
a
l
l
'
 
]
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
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
s
i
t
e
_
i
m
a
g
e
s
[
'
l
o
g
o
'
]
 
a
s
 
$
i
m
a
g
e
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
L
O
G
O
'
 
]
 
=
 
$
i
m
a
g
e
[
'
s
m
a
l
l
'
]
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
A
D
M
I
N
I
S
T
R
A
T
O
R
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
p
o
p
u
p
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
a
d
m
i
n
_
p
r
i
n
t
a
b
l
e
_
i
n
v
o
i
c
e
.
h
t
m
l
'
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
a
d
m
i
n
_
v
i
e
w
_
i
n
v
o
i
c
e
.
h
t
m
l
'
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
r
o
w
s
'
,
 
$
r
o
w
s
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
t
r
a
n
s
a
c
t
i
o
n
_
r
o
w
s
'
,
 
$
t
r
a
n
s
a
c
t
i
o
n
_
r
o
w
s
)
;


 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
d
i
s
p
l
a
y
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

