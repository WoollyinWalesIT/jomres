
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
0
6
0
0
5
s
a
v
e
_
n
e
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
s
e
l
f
R
e
g
i
s
t
r
a
t
i
o
n
A
l
l
o
w
e
d
'
]
 
=
=
 
'
0
'
 
&
&
 
!
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
s
u
p
e
r
P
r
o
p
e
r
t
y
M
a
n
a
g
e
r
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
n
a
m
e
 
=
 
t
r
i
m
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
P
O
S
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
n
a
m
e
'
,
 
'
'
)
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
n
a
m
e
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
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
.
'
&
t
a
s
k
=
n
e
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
'
)
,
 
'
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
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
j
o
m
r
e
s
 
p
r
o
p
e
r
t
i
e
s
 
o
b
j
e
c
t

 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
i
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
p
r
o
p
e
r
t
i
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
p
r
o
p
e
r
t
i
e
s
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
n
a
m
e
 
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
n
a
m
e
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
l
i
m
i
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
=
 
'
0
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
i
e
s
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
c
o
u
n
t
r
y
 
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
P
O
S
T
,
 
'
n
e
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
c
o
u
n
t
r
y
'
,
 
'
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
j
o
m
r
e
s
_
p
r
o
p
e
r
t
i
e
s
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
c
o
u
n
t
r
y
 
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
l
i
m
i
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
c
o
u
n
t
r
y
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
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
i
e
s
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
r
e
g
i
o
n
 
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
P
O
S
T
,
 
'
r
e
g
i
o
n
'
,
 
'
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
p
r
o
p
e
r
t
i
e
s
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
e
m
a
i
l
 
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
P
O
S
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
e
m
a
i
l
'
,
 
'
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
p
r
o
p
e
r
t
i
e
s
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
s
i
t
e
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
P
O
S
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
s
i
t
e
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
j
o
m
r
e
s
_
p
r
o
p
e
r
t
i
e
s
-
>
p
t
y
p
e
_
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
P
O
S
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
T
y
p
e
'
,
 
0
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
p
r
o
p
e
r
t
i
e
s
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
k
e
y
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
,
'
,
 
'
'
,
 
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
P
O
S
T
,
 
'
p
r
i
c
e
'
,
 
'
'
)
)
;


 
 
 
 
 
 
 
 
/
/
i
n
s
e
r
t
 
n
e
w
 
p
r
o
p
e
r
t
y

 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
i
e
s
-
>
c
o
m
m
i
t
_
n
e
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
m
e
s
s
a
g
i
n
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
s
s
a
g
i
n
g
-
>
s
e
t
_
m
e
s
s
a
g
e
(
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
E
G
I
S
T
R
A
T
I
O
N
_
A
U
D
I
T
_
C
R
E
A
T
E
P
R
O
P
E
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
R
E
G
I
S
T
R
A
T
I
O
N
_
A
U
D
I
T
_
C
R
E
A
T
E
P
R
O
P
E
R
T
Y
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


 
 
 
 
 
 
 
 
/
/
0
4
9
0
1
 
t
r
i
g
g
e
r
 
p
o
i
n
t
 
(
a
s
s
i
g
n
 
a
 
d
e
f
a
u
l
t
 
c
o
m
m
i
s
s
i
o
n
 
r
a
t
e
 
t
o
 
t
h
e
 
n
e
w
 
p
r
o
p
e
r
t
y
,
 
n
e
w
 
p
r
o
p
e
r
t
y
 
w
e
l
c
o
m
e
 
e
m
a
i
l
,
 
e
t
c
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
 
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
i
e
s
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
s
_
u
i
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
4
9
0
1
'
,
 
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
;


 
 
 
 
 
 
 
 
/
/
s
e
n
d
 
a
d
m
i
n
 
e
m
a
i
l
 
i
f
 
t
h
e
 
n
e
w
 
p
r
o
p
e
r
t
y
 
r
e
q
u
i
r
e
s
 
a
p
p
r
o
v
a
l
.
 
T
O
D
O
:
 
m
o
v
e
 
t
o
 
0
4
9
0
1
 
t
r
i
g
g
e
r
 
p
o
i
n
t
 
t
o
o

 
 
 
 
 
 
 
 
i
f
 
(
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
i
e
s
-
>
a
p
p
r
o
v
e
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
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
p
r
o
p
e
r
t
y
_
a
p
p
r
o
v
a
l
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
b
j
e
c
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
R
E
S
_
A
P
P
R
O
V
A
L
S
_
A
D
M
I
N
_
E
M
A
I
L
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
O
M
R
E
S
_
A
P
P
R
O
V
A
L
S
_
A
D
M
I
N
_
E
M
A
I
L
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
 
f
a
l
s
e
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
P
P
R
O
V
A
L
S
_
A
D
M
I
N
_
E
M
A
I
L
_
C
O
N
T
E
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
P
P
R
O
V
A
L
S
_
A
D
M
I
N
_
E
M
A
I
L
_
C
O
N
T
E
N
T
'
,
 
f
a
l
s
e
)
.
$
l
i
n
k
;

 
 
 
 
 
 
 
 
 
 
 
 
s
e
n
d
A
d
m
i
n
E
m
a
i
l
(
$
s
u
b
j
e
c
t
,
 
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

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
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
.
'
&
t
h
i
s
P
r
o
p
e
r
t
y
=
'
.
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
i
e
s
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
s
_
u
i
d
)
,
 
'
'
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

