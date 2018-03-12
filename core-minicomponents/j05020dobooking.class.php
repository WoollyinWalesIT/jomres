
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
5
0
2
0
d
o
b
o
o
k
i
n
g

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
 
=
 
a
r
r
a
y
(
)
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
u
i
d
'
)
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
)
;

 
 
 
 
 
 
 
 
$
c
a
l
e
n
d
a
r
 
=
 
'
'
;

 
 
 
 
 
 
 
 
i
f
 
(
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
i
n
c
l
u
d
e
_
r
o
o
m
_
b
o
o
k
i
n
g
_
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
'
)
 
&
&
 
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
s
h
o
w
A
v
a
i
l
a
b
i
l
i
t
y
C
a
l
e
n
d
a
r
'
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
'
 
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
l
e
n
d
a
r
 
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
r
p
_
c
a
l
e
n
d
a
r
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
,
 
'
m
o
n
t
h
s
_
t
o
_
s
h
o
w
'
 
=
>
 
2
4
,
 
'
s
h
o
w
_
j
u
s
t
_
m
o
n
t
h
'
 
=
>
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
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
s
h
o
w
R
o
o
m
s
I
n
P
r
o
p
e
r
t
y
D
e
t
a
i
l
s
'
 
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
l
e
n
d
a
r
 
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
m
r
p
_
c
a
l
e
n
d
a
r
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
,
 
'
m
o
n
t
h
s
_
t
o
_
s
h
o
w
'
 
=
>
 
2
4
,
 
'
s
h
o
w
_
j
u
s
t
_
m
o
n
t
h
'
 
=
>
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
s
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
b
o
o
k
i
n
g
_
f
o
r
m
_
c
a
l
e
n
d
a
r
'
,
 
$
c
a
l
e
n
d
a
r
)
;

 
 
 
 
 
 
 
 
r
e
q
u
i
r
e
_
o
n
c
e
 
J
O
M
R
E
S
_
F
U
N
C
T
I
O
N
S
_
A
B
S
P
A
T
H
.
'
d
o
b
o
o
k
i
n
g
.
p
h
p
'
;


 
 
 
 
 
 
 
 
i
f
 
(
!
d
e
f
i
n
e
d
(
'
D
O
B
O
O
K
I
N
G
_
I
N
_
D
E
T
A
I
L
S
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
s
e
t
m
e
t
a
d
a
t
a
(
'
r
o
b
o
t
s
'
,
 
'
n
o
i
n
d
e
x
,
n
o
f
o
l
l
o
w
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
s
c
r
i
p
t
 
t
y
p
e
=
"
t
e
x
t
/
j
a
v
a
s
c
r
i
p
t
"
>
j
o
m
r
e
s
J
q
u
e
r
y
(
d
o
c
u
m
e
n
t
)
.
r
e
a
d
y
(
f
u
n
c
t
i
o
n
(
)
{
j
o
m
r
e
s
J
q
u
e
r
y
(
"
#
a
v
a
i
l
a
b
i
l
i
t
y
_
c
a
l
e
n
d
a
r
_
m
o
d
e
l
"
)
.
a
p
p
e
n
d
T
o
(
"
b
o
d
y
"
)
;
}
)
;
<
/
s
c
r
i
p
t
>
'
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
 
t
o
u
c
h
_
t
e
m
p
l
a
t
e
_
l
a
n
g
u
a
g
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
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
o
u
t
p
u
t
[
 
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
P
E
R
D
A
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
P
E
R
D
A
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
A
R
R
I
V
A
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
A
R
R
I
V
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
F
R
O
N
T
_
M
R
_
F
I
X
E
D
P
R
I
O
D
1
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
F
R
O
N
T
_
M
R
_
F
I
X
E
D
P
R
I
O
D
1
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
D
E
P
A
R
T
U
R
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
D
E
P
A
R
T
U
R
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
Q
U
I
C
K
R
E
S
D
E
S
C
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
Q
U
I
C
K
R
E
S
D
E
S
C
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
P
R
O
P
E
R
T
I
E
S
L
I
S
T
I
N
G
_
T
H
I
S
P
R
O
P
E
R
T
Y
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
M
R
_
P
R
O
P
E
R
T
I
E
S
L
I
S
T
I
N
G
_
T
H
I
S
P
R
O
P
E
R
T
Y
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
F
R
O
N
T
_
M
R
_
B
O
O
K
I
N
G
_
E
X
T
R
A
S
_
H
E
L
P
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
F
R
O
N
T
_
M
R
_
B
O
O
K
I
N
G
_
E
X
T
R
A
S
_
H
E
L
P
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
J
A
V
A
S
C
R
I
P
T
_
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
J
A
V
A
S
C
R
I
P
T
_
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
R
O
O
M
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
R
O
O
M
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
R
O
O
M
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
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
R
O
O
M
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
E
X
T
R
A
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
E
X
T
R
A
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
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
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
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
A
J
A
X
F
O
R
M
_
B
I
L
L
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
A
J
A
X
F
O
R
M
_
B
I
L
L
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
P
A
Y
M
_
D
E
P
O
S
I
T
R
E
Q
U
I
R
E
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
P
A
Y
M
_
D
E
P
O
S
I
T
R
E
Q
U
I
R
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
T
O
T
A
L
I
N
P
A
R
T
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
T
O
T
A
L
I
N
P
A
R
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
T
O
T
A
L
I
N
P
A
R
T
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
T
O
T
A
L
I
N
P
A
R
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
A
J
A
X
F
O
R
M
_
P
A
R
T
I
C
U
L
A
R
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
A
J
A
X
F
O
R
M
_
P
A
R
T
I
C
U
L
A
R
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
A
J
A
X
F
O
R
M
_
P
A
R
T
I
C
U
L
A
R
S
_
D
E
S
C
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
A
J
A
X
F
O
R
M
_
P
A
R
T
I
C
U
L
A
R
S
_
D
E
S
C
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
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
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
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
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
A
J
A
X
F
O
R
M
_
E
X
T
R
A
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
A
J
A
X
F
O
R
M
_
E
X
T
R
A
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
A
J
A
X
F
O
R
M
_
E
X
T
R
A
S
_
D
E
S
C
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
A
J
A
X
F
O
R
M
_
E
X
T
R
A
S
_
D
E
S
C
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
A
J
A
X
F
O
R
M
_
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
A
J
A
X
F
O
R
M
_
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
A
J
A
X
F
O
R
M
_
A
D
D
R
E
S
S
_
D
E
S
C
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
A
J
A
X
F
O
R
M
_
A
D
D
R
E
S
S
_
D
E
S
C
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
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
R
O
O
M
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
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
R
O
O
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
A
J
A
X
F
O
R
M
_
S
E
L
E
C
T
E
D
R
O
O
M
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
A
J
A
X
F
O
R
M
_
S
E
L
E
C
T
E
D
R
O
O
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
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
R
O
O
M
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
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
R
O
O
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
A
J
A
X
F
O
R
M
_
S
E
L
E
C
T
E
D
R
O
O
M
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
A
J
A
X
F
O
R
M
_
S
E
L
E
C
T
E
D
R
O
O
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
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
_
D
E
S
C
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
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
_
D
E
S
C
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
A
J
A
X
F
O
R
M
_
I
N
S
T
R
U
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
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
I
N
S
T
R
U
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
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
_
D
E
S
C
_
S
R
P
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
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
_
D
E
S
C
_
S
R
P
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
A
J
A
X
F
O
R
M
_
I
N
S
T
R
U
C
T
I
O
N
S
_
S
R
P
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
A
J
A
X
F
O
R
M
_
I
N
S
T
R
U
C
T
I
O
N
S
_
S
R
P
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
Q
U
I
C
K
R
E
S
_
S
T
E
P
4
_
S
T
A
Y
D
A
Y
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
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
4
_
S
T
A
Y
D
A
Y
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
F
R
O
N
T
_
M
R
_
R
E
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
F
R
O
N
T
_
M
R
_
R
E
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
F
R
O
N
T
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
I
R
S
T
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
F
R
O
N
T
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
I
R
S
T
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
F
R
O
N
T
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
F
R
O
N
T
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
F
R
O
N
T
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
H
O
U
S
E
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
F
R
O
N
T
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
H
O
U
S
E
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
F
R
O
N
T
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
S
T
R
E
E
T
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
F
R
O
N
T
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
S
T
R
E
E
T
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
F
R
O
N
T
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
T
O
W
N
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
F
R
O
N
T
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
T
O
W
N
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
F
R
O
N
T
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
P
O
S
T
C
O
D
E
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
F
R
O
N
T
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
P
O
S
T
C
O
D
E
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
F
R
O
N
T
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
L
A
N
D
L
I
N
E
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
F
R
O
N
T
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
L
A
N
D
L
I
N
E
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
F
R
O
N
T
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
M
O
B
I
L
E
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
F
R
O
N
T
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
M
O
B
I
L
E
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
B
O
O
K
I
T
N
O
W
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
B
O
O
K
I
T
N
O
W
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
S
R
P
_
W
E
H
A
V
E
V
A
C
A
N
C
I
E
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
S
R
P
_
W
E
H
A
V
E
V
A
C
A
N
C
I
E
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
F
R
O
N
T
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
2
_
N
O
R
O
O
M
S
I
N
R
A
N
G
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
F
R
O
N
T
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
2
_
N
O
R
O
O
M
S
I
N
R
A
N
G
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
S
R
P
_
W
E
H
A
V
E
N
O
V
A
C
A
N
C
I
E
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
S
R
P
_
W
E
H
A
V
E
N
O
V
A
C
A
N
C
I
E
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
A
J
A
X
F
O
R
M
_
C
L
I
C
K
H
E
R
E
C
A
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
A
J
A
X
F
O
R
M
_
C
L
I
C
K
H
E
R
E
C
A
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
A
J
A
X
F
O
R
M
_
C
L
I
C
K
H
E
R
E
C
A
P
T
I
O
N
_
R
E
M
O
V
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
A
J
A
X
F
O
R
M
_
C
L
I
C
K
H
E
R
E
C
A
P
T
I
O
N
_
R
E
M
O
V
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
R
O
O
M
_
H
E
A
D
E
R
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
R
O
O
M
_
H
E
A
D
E
R
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
R
O
O
M
_
H
E
A
D
E
R
_
T
Y
P
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
R
O
O
M
_
H
E
A
D
E
R
_
T
Y
P
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
R
O
O
M
_
H
E
A
D
E
R
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
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
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
R
O
O
M
_
H
E
A
D
E
R
_
F
L
O
O
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
R
O
O
M
_
H
E
A
D
E
R
_
F
L
O
O
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
R
O
O
M
_
H
E
A
D
E
R
_
M
A
X
P
E
O
P
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
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
M
A
X
P
E
O
P
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
R
O
O
M
_
F
E
A
T
U
R
E
S
_
L
I
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
B
_
R
O
O
M
_
F
E
A
T
U
R
E
S
_
L
I
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
F
R
O
N
T
_
T
A
R
I
F
F
S
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
F
R
O
N
T
_
T
A
R
I
F
F
S
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
D
E
S
C
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
D
E
S
C
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
S
T
A
R
T
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
S
T
A
R
T
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
E
N
D
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
E
N
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
I
N
D
A
Y
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
I
N
D
A
Y
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
A
X
D
A
Y
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
A
X
D
A
Y
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
I
N
P
E
E
P
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
I
N
P
E
E
P
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
A
X
P
E
E
P
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
A
X
P
E
E
P
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
L
I
S
T
T
A
R
I
F
F
_
R
O
O
M
R
A
T
E
P
E
R
D
A
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
L
I
S
T
T
A
R
I
F
F
_
R
O
O
M
R
A
T
E
P
E
R
D
A
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
L
I
S
T
T
A
R
I
F
F
_
R
O
O
M
R
A
T
E
P
E
R
W
E
E
K
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
L
I
S
T
T
A
R
I
F
F
_
R
O
O
M
R
A
T
E
P
E
R
W
E
E
K
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
P
P
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
P
P
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
N
O
T
W
E
E
K
E
N
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
N
O
T
W
E
E
K
E
N
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
B
O
O
K
I
N
G
_
T
O
O
_
S
H
O
R
T
1
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
B
O
O
K
I
N
G
_
T
O
O
_
S
H
O
R
T
1
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
S
R
P
_
W
E
H
A
V
E
N
O
V
A
C
A
N
C
I
E
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
S
R
P
_
W
E
H
A
V
E
N
O
V
A
C
A
N
C
I
E
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
A
R
R
I
V
A
L
D
A
T
E
_
I
N
V
A
L
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
A
R
R
I
V
A
L
D
A
T
E
_
I
N
V
A
L
I
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
D
E
P
A
R
T
U
R
E
D
A
T
E
_
I
N
V
A
L
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
D
E
P
A
R
T
U
R
E
D
A
T
E
_
I
N
V
A
L
I
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
G
U
E
S
T
_
T
Y
P
E
_
I
N
C
O
R
R
E
C
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
G
U
E
S
T
_
T
Y
P
E
_
I
N
C
O
R
R
E
C
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
S
E
L
E
C
T
_
G
U
E
S
T
_
N
U
M
B
E
R
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
S
E
L
E
C
T
_
G
U
E
S
T
_
N
U
M
B
E
R
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
T
O
O
_
M
A
N
Y
_
I
N
_
P
A
R
T
Y
_
F
O
R
_
T
A
R
I
F
F
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
T
O
O
_
M
A
N
Y
_
I
N
_
P
A
R
T
Y
_
F
O
R
_
T
A
R
I
F
F
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
M
O
R
E
_
R
O
O
M
S
_
T
H
A
N
_
G
U
E
S
T
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
M
O
R
E
_
R
O
O
M
S
_
T
H
A
N
_
G
U
E
S
T
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
T
O
O
_
M
A
N
Y
_
G
U
E
S
T
S
_
F
O
R
_
B
E
D
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
T
O
O
_
M
A
N
Y
_
G
U
E
S
T
S
_
F
O
R
_
B
E
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
S
R
P
_
W
E
H
A
V
E
N
O
V
A
C
A
N
C
I
E
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
S
R
P
_
W
E
H
A
V
E
N
O
V
A
C
A
N
C
I
E
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
C
H
O
O
S
E
_
M
O
R
E
_
R
O
O
M
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
C
H
O
O
S
E
_
M
O
R
E
_
R
O
O
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
S
E
L
E
C
T
_
A
_
R
O
O
M
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
S
E
L
E
C
T
_
A
_
R
O
O
M
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
Q
U
I
C
K
R
E
S
_
S
T
E
P
4
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
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
4
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
A
J
A
X
F
O
R
M
_
C
O
U
P
O
N
_
A
P
P
L
Y
B
U
T
T
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
A
J
A
X
F
O
R
M
_
C
O
U
P
O
N
_
A
P
P
L
Y
B
U
T
T
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
A
J
A
X
F
O
R
M
_
C
O
U
P
O
N
_
I
N
S
T
R
U
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
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
C
O
U
P
O
N
_
I
N
S
T
R
U
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
C
O
U
P
O
N
S
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
C
O
U
P
O
N
S
_
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
A
J
A
X
F
O
R
M
_
C
O
U
P
O
N
_
C
O
U
P
O
N
S
A
V
E
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
A
J
A
X
F
O
R
M
_
C
O
U
P
O
N
_
C
O
U
P
O
N
S
A
V
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
A
J
A
X
F
O
R
M
_
C
O
U
P
O
N
_
C
O
U
P
O
N
N
O
T
F
O
U
N
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
A
J
A
X
F
O
R
M
_
C
O
U
P
O
N
_
C
O
U
P
O
N
N
O
T
F
O
U
N
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
N
E
W
U
S
E
R
_
S
U
B
J
E
C
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
N
E
W
U
S
E
R
_
S
U
B
J
E
C
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
N
E
W
U
S
E
R
_
D
E
A
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
N
E
W
U
S
E
R
_
D
E
A
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
N
E
W
U
S
E
R
_
T
H
A
N
K
Y
O
U
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
N
E
W
U
S
E
R
_
T
H
A
N
K
Y
O
U
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
N
E
W
U
S
E
R
_
U
S
E
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
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
U
S
E
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
N
E
W
U
S
E
R
_
P
A
S
S
W
O
R
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
N
E
W
U
S
E
R
_
P
A
S
S
W
O
R
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
N
E
W
U
S
E
R
_
L
O
G
_
I
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
N
E
W
U
S
E
R
_
L
O
G
_
I
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
R
O
O
M
A
L
L
O
C
A
T
I
O
N
S
_
R
O
O
M
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
R
O
O
M
A
L
L
O
C
A
T
I
O
N
S
_
R
O
O
M
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
R
O
O
M
A
L
L
O
C
A
T
I
O
N
S
_
G
U
E
S
T
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
R
O
O
M
A
L
L
O
C
A
T
I
O
N
S
_
G
U
E
S
T
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
R
O
O
M
A
L
L
O
C
A
T
I
O
N
S
_
I
N
F
O
R
M
A
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
R
O
O
M
A
L
L
O
C
A
T
I
O
N
S
_
I
N
F
O
R
M
A
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
M
A
X
_
G
U
E
S
T
S
_
P
E
R
_
R
O
O
M
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
M
A
X
_
G
U
E
S
T
S
_
P
E
R
_
R
O
O
M
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
M
A
X
_
G
U
E
S
T
S
_
P
E
R
_
B
O
O
K
I
N
G
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
M
A
X
_
G
U
E
S
T
S
_
P
E
R
_
B
O
O
K
I
N
G
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
N
U
M
B
E
R
_
O
F
_
R
O
O
M
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
N
U
M
B
E
R
_
O
F
_
R
O
O
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
P
A
R
T
N
E
R
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
O
M
R
E
S
_
P
A
R
T
N
E
R
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
B
O
O
K
I
N
G
F
O
R
M
_
N
O
R
O
O
M
S
S
E
L
E
C
T
E
D
Y
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
B
O
O
K
I
N
G
F
O
R
M
_
N
O
R
O
O
M
S
S
E
L
E
C
T
E
D
Y
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
F
R
O
N
T
_
M
R
_
B
O
O
K
E
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
F
R
O
N
T
_
M
R
_
B
O
O
K
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
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
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
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
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
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
W
E
E
K
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
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
W
E
E
K
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
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
M
O
N
T
H
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
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
M
O
N
T
H
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
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
D
A
I
L
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
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
D
A
I
L
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
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
W
E
E
K
L
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
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
W
E
E
K
L
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
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
M
O
N
T
H
L
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
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
M
O
N
T
H
L
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
B
O
O
K
I
N
G
F
O
R
M
_
P
E
R
P
E
R
S
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
B
O
O
K
I
N
G
F
O
R
M
_
P
E
R
P
E
R
S
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
B
O
O
K
I
N
G
O
R
M
_
R
O
O
M
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
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
O
R
M
_
R
O
O
M
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
B
O
O
K
I
N
G
O
R
M
_
R
O
O
M
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
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
O
R
M
_
R
O
O
M
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
T
A
X
_
A
C
C
O
M
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
T
A
X
_
A
C
C
O
M
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
A
J
A
X
F
O
R
M
_
B
U
T
T
O
N
_
O
P
E
N
_
B
O
O
K
I
N
G
F
O
R
M
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
A
J
A
X
F
O
R
M
_
B
U
T
T
O
N
_
O
P
E
N
_
B
O
O
K
I
N
G
F
O
R
M
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
A
J
A
X
F
O
R
M
_
B
U
T
T
O
N
_
B
A
C
K
_
T
O
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
D
E
T
A
I
L
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
A
J
A
X
F
O
R
M
_
B
U
T
T
O
N
_
B
A
C
K
_
T
O
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
D
E
T
A
I
L
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
B
O
O
K
I
N
G
O
R
M
_
R
O
O
M
T
O
T
A
L
_
B
A
L
A
N
C
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
B
O
O
K
I
N
G
O
R
M
_
R
O
O
M
T
O
T
A
L
_
B
A
L
A
N
C
E
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
o
u
t
p
u
t
 
a
s
 
$
o
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
o
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
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

