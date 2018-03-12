
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
e
d
i
t
_
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
d
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

 
 
 
 
 
 
 
 
i
f
 
(
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
c
u
r
r
e
n
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
'
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
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
-
>
g
a
t
h
e
r
_
d
a
t
a
(
$
d
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
)
;


 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
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
b
a
s
i
c
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
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
-
>
g
a
t
h
e
r
_
d
a
t
a
(
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
,
 
$
d
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
)
;


 
 
 
 
 
 
 
 
i
f
 
(
!
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
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
p
o
p
u
p
 
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
o
p
u
p
'
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


 
 
 
 
 
 
 
 
/
/
c
h
e
c
k
 
i
f
 
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
 
c
a
n
 
b
e
 
a
p
p
r
o
v
e
d
 
o
r
 
n
o
t

 
 
 
 
 
 
 
 
$
c
a
n
_
b
e
_
a
p
p
r
o
v
e
d
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
$
a
p
p
r
o
v
a
l
_
m
s
g
 
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
(
i
n
t
)
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
a
p
p
r
o
v
e
d
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
o
m
s
_
t
a
r
i
f
f
s
 
=
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
r
o
o
m
s
_
t
a
r
i
f
f
s
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
_
r
a
n
g
e
_
s
t
r
i
n
g
 
=
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
d
a
t
e
_
r
a
n
g
e
_
s
t
r
i
n
g
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
 
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
,
'
,
 
$
d
a
t
e
_
r
a
n
g
e
_
s
t
r
i
n
g
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
 
=
 
c
o
u
n
t
(
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
)
;


 
 
 
 
 
 
 
 
 
 
 
 
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
 
r
o
o
m
_
u
i
d
,
 
`
d
a
t
e
`
 
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
s
 
W
H
E
R
E
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
 
(
$
i
 
=
 
0
,
 
$
n
;
 
$
i
 
<
 
$
n
;
 
+
+
$
i
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
B
o
o
k
e
d
D
a
t
e
 
=
 
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
[
 
$
i
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
e
d
 
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
,
'
,
 
$
r
o
o
m
s
_
t
a
r
i
f
f
s
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
s
e
l
e
c
t
e
d
 
a
s
 
$
r
o
o
m
s
R
e
q
u
e
s
t
e
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
m
 
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
^
'
,
 
$
r
o
o
m
s
R
e
q
u
e
s
t
e
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
m
u
i
d
 
=
 
$
r
m
[
 
0
 
]
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
.
=
 
"
(
`
r
o
o
m
_
u
i
d
`
 
=
 
'
"
.
(
i
n
t
)
 
$
r
m
u
i
d
.
"
'
 
A
N
D
 
`
d
a
t
e
`
 
=
 
'
"
.
$
r
o
o
m
B
o
o
k
e
d
D
a
t
e
.
"
'
)
 
O
R
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
s
u
b
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
$
q
u
e
r
y
,
 
'
'
,
 
-
4
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
r
e
s
u
l
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
n
_
b
e
_
a
p
p
r
o
v
e
d
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
u
s
i
n
g
_
b
o
o
t
s
t
r
a
p
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
p
p
r
o
v
a
l
_
m
s
g
[
'
C
L
A
S
S
'
]
 
=
 
'
a
l
e
r
t
 
a
l
e
r
t
-
e
r
r
o
r
 
a
l
e
r
t
-
d
a
n
g
e
r
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
p
p
r
o
v
a
l
_
m
s
g
[
'
C
L
A
S
S
'
]
 
=
 
'
u
i
-
s
t
a
t
e
-
e
r
r
o
r
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
p
p
r
o
v
a
l
_
m
s
g
[
'
M
E
S
S
A
G
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
A
N
T
_
B
E
_
A
P
P
R
O
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
C
A
N
T
_
B
E
_
A
P
P
R
O
V
E
D
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
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
u
s
i
n
g
_
b
o
o
t
s
t
r
a
p
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
p
p
r
o
v
a
l
_
m
s
g
[
'
C
L
A
S
S
'
]
 
=
 
'
a
l
e
r
t
 
a
l
e
r
t
-
s
u
c
c
e
s
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
p
p
r
o
v
a
l
_
m
s
g
[
'
C
L
A
S
S
'
]
 
=
 
'
u
i
-
s
t
a
t
e
-
d
e
f
a
u
l
t
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
p
p
r
o
v
a
l
_
m
s
g
[
'
M
E
S
S
A
G
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
A
N
_
B
E
_
A
P
P
R
O
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
C
A
N
_
B
E
_
A
P
P
R
O
V
E
D
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

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
d
i
s
p
l
a
y
 
a
 
m
e
s
s
a
g
e
 
i
f
 
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
 
i
s
 
c
a
n
c
e
l
l
e
d

 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
c
a
n
c
e
l
l
e
d
'
]
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
u
s
i
n
g
_
b
o
o
t
s
t
r
a
p
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
p
p
r
o
v
a
l
_
m
s
g
[
'
C
L
A
S
S
'
]
 
=
 
'
a
l
e
r
t
 
a
l
e
r
t
-
e
r
r
o
r
 
a
l
e
r
t
-
d
a
n
g
e
r
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
p
p
r
o
v
a
l
_
m
s
g
[
'
C
L
A
S
S
'
]
 
=
 
'
u
i
-
s
t
a
t
e
-
e
r
r
o
r
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
a
p
p
r
o
v
a
l
_
m
s
g
[
'
M
E
S
S
A
G
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
O
M
R
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
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
$
l
a
n
g
 
=
 
s
u
b
s
t
r
(
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
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
l
a
n
g
u
a
g
e
'
]
,
 
0
,
 
2
)
;

 
 
 
 
 
 
 
 
i
f
 
(
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
u
s
e
r
I
s
M
a
n
a
g
e
r
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
!
$
p
o
p
u
p
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
b
o
o
k
i
n
g
 
a
p
p
r
o
v
a
l
s

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
a
p
p
r
o
v
e
d
'
]
 
=
=
 
0
 
&
&
 
i
s
s
e
t
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
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
[
'
0
0
0
0
5
'
]
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
e
n
q
u
i
r
i
e
s
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
a
n
_
b
e
_
a
p
p
r
o
v
e
d
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
H
A
P
P
R
O
V
E
B
O
O
K
I
N
G
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
B
O
O
K
I
N
G
_
A
P
P
R
O
V
E
_
I
N
Q
U
I
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
B
O
O
K
I
N
G
_
A
P
P
R
O
V
E
_
I
N
Q
U
I
R
Y
'
,
 
$
e
d
i
t
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
,
 
$
i
s
L
i
n
k
 
=
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
.
'
&
t
a
s
k
=
a
p
p
r
o
v
e
_
e
n
q
u
i
r
y
&
c
o
n
t
r
a
c
t
U
i
d
=
'
.
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
t
a
r
g
e
t
T
a
s
k
 
=
 
'
b
o
o
k
i
n
g
_
a
p
p
r
o
v
a
l
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
a
g
e
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
S
_
R
E
L
P
A
T
H
.
'
j
o
m
r
e
s
i
m
a
g
e
s
/
'
.
$
j
r
t
b
a
r
-
>
i
m
a
g
e
S
i
z
e
.
'
/
T
i
c
k
.
p
n
g
'
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
c
u
s
t
o
m
T
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
$
t
a
r
g
e
t
T
a
s
k
,
 
$
l
i
n
k
,
 
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
A
P
P
R
O
V
E
B
O
O
K
I
N
G
'
 
]
,
 
$
s
u
b
m
i
t
O
n
C
l
i
c
k
 
=
 
f
a
l
s
e
,
 
$
s
u
b
m
i
t
T
a
s
k
 
=
 
'
'
,
 
$
i
m
a
g
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
H
R
E
J
E
C
T
B
O
O
K
I
N
G
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
B
O
O
K
I
N
G
_
R
E
J
E
C
T
_
I
N
Q
U
I
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
B
O
O
K
I
N
G
_
R
E
J
E
C
T
_
I
N
Q
U
I
R
Y
'
,
 
$
e
d
i
t
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
,
 
$
i
s
L
i
n
k
 
=
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
.
'
&
t
a
s
k
=
r
e
j
e
c
t
_
e
n
q
u
i
r
y
&
c
o
n
t
r
a
c
t
U
i
d
=
'
.
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
t
a
r
g
e
t
T
a
s
k
 
=
 
'
b
o
o
k
i
n
g
_
r
e
j
e
c
t
i
o
n
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
a
g
e
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
S
_
R
E
L
P
A
T
H
.
'
j
o
m
r
e
s
i
m
a
g
e
s
/
'
.
$
j
r
t
b
a
r
-
>
i
m
a
g
e
S
i
z
e
.
'
/
C
a
n
c
e
l
.
p
n
g
'
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
c
u
s
t
o
m
T
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
$
t
a
r
g
e
t
T
a
s
k
,
 
$
l
i
n
k
,
 
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
J
E
C
T
B
O
O
K
I
N
G
'
 
]
,
 
$
s
u
b
m
i
t
O
n
C
l
i
c
k
 
=
 
f
a
l
s
e
,
 
$
s
u
b
m
i
t
T
a
s
k
 
=
 
'
'
,
 
$
i
m
a
g
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
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
A
M
E
N
D
B
O
O
K
I
N
G
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
N
F
I
R
M
A
T
I
O
N
_
A
M
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
C
O
N
F
I
R
M
A
T
I
O
N
_
A
M
E
N
D
'
,
 
$
e
d
i
t
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
,
 
$
i
s
L
i
n
k
 
=
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
.
'
&
t
a
s
k
=
a
m
e
n
d
B
o
o
k
i
n
g
&
n
o
_
h
t
m
l
=
1
&
c
o
n
t
r
a
c
t
U
i
d
=
'
.
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
t
a
r
g
e
t
T
a
s
k
 
=
 
'
a
m
e
n
d
B
o
o
k
i
n
g
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
a
g
e
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
S
_
R
E
L
P
A
T
H
.
'
j
o
m
r
e
s
i
m
a
g
e
s
/
'
.
$
j
r
t
b
a
r
-
>
i
m
a
g
e
S
i
z
e
.
'
/
H
o
t
e
l
R
e
s
e
r
v
a
t
i
o
n
E
d
i
t
.
p
n
g
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
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
b
o
o
k
e
d
o
u
t
'
]
 
!
=
 
1
 
&
&
 
(
i
n
t
)
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
c
a
n
c
e
l
l
e
d
'
]
 
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
c
u
s
t
o
m
T
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
$
t
a
r
g
e
t
T
a
s
k
,
 
$
l
i
n
k
,
 
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
A
M
E
N
D
B
O
O
K
I
N
G
'
 
]
,
 
$
s
u
b
m
i
t
O
n
C
l
i
c
k
 
=
 
f
a
l
s
e
,
 
$
s
u
b
m
i
t
T
a
s
k
 
=
 
'
'
,
 
$
i
m
a
g
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
d
a
y
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
b
o
o
k
e
d
o
u
t
'
]
 
!
=
 
1
 
&
&
 
(
i
n
t
)
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
c
a
n
c
e
l
l
e
d
'
]
 
!
=
 
1
 
&
&
 
(
i
n
t
)
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
a
p
p
r
o
v
e
d
'
]
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
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
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
i
f
 
(
$
t
o
d
a
y
 
>
=
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
a
r
r
i
v
a
l
'
]
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
H
B
O
O
K
G
U
E
S
T
I
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
B
O
O
K
A
G
U
E
S
T
I
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
M
R
_
M
E
N
U
_
A
D
M
I
N
_
B
O
O
K
A
G
U
E
S
T
I
N
'
,
 
$
e
d
i
t
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
,
 
$
i
s
L
i
n
k
 
=
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
.
'
&
t
a
s
k
=
c
h
e
c
k
i
n
&
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
'
.
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
t
a
r
g
e
t
T
a
s
k
 
=
 
'
b
o
o
k
G
u
e
s
t
I
n
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
a
g
e
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
S
_
R
E
L
P
A
T
H
.
'
j
o
m
r
e
s
i
m
a
g
e
s
/
'
.
$
j
r
t
b
a
r
-
>
i
m
a
g
e
S
i
z
e
.
'
/
B
o
o
k
G
u
e
s
t
I
n
.
p
n
g
'
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
c
u
s
t
o
m
T
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
$
t
a
r
g
e
t
T
a
s
k
,
 
$
l
i
n
k
,
 
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
O
O
K
G
U
E
S
T
I
N
'
 
]
,
 
$
s
u
b
m
i
t
O
n
C
l
i
c
k
 
=
 
f
a
l
s
e
,
 
$
s
u
b
m
i
t
T
a
s
k
 
=
 
'
'
,
 
$
i
m
a
g
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
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
_
b
o
o
k
i
n
g
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
.
'
&
t
a
s
k
=
c
a
n
c
e
l
_
b
o
o
k
i
n
g
&
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
'
.
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
)
,
 
'
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
O
O
K
G
U
E
S
T
O
U
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
B
O
O
K
A
G
U
E
S
T
O
U
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
B
O
O
K
A
G
U
E
S
T
O
U
T
'
,
 
$
e
d
i
t
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
,
 
$
i
s
L
i
n
k
 
=
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
.
'
&
t
a
s
k
=
c
h
e
c
k
o
u
t
&
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
'
.
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
t
a
r
g
e
t
T
a
s
k
 
=
 
'
b
o
o
k
G
u
e
s
t
O
u
t
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
a
g
e
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
S
_
R
E
L
P
A
T
H
.
'
j
o
m
r
e
s
i
m
a
g
e
s
/
'
.
$
j
r
t
b
a
r
-
>
i
m
a
g
e
S
i
z
e
.
'
/
B
o
o
k
G
u
e
s
t
O
u
t
.
p
n
g
'
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
c
u
s
t
o
m
T
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
$
t
a
r
g
e
t
T
a
s
k
,
 
$
l
i
n
k
,
 
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
O
O
K
G
U
E
S
T
O
U
T
'
 
]
,
 
$
s
u
b
m
i
t
O
n
C
l
i
c
k
 
=
 
f
a
l
s
e
,
 
$
s
u
b
m
i
t
T
a
s
k
 
=
 
'
'
,
 
$
i
m
a
g
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
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
p
a
i
d
'
]
 
!
=
 
1
 
&
&
 
(
i
n
t
)
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
b
o
o
k
e
d
o
u
t
'
]
 
!
=
 
1
 
&
&
 
(
i
n
t
)
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
c
a
n
c
e
l
l
e
d
'
]
 
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
e
d
i
t
_
d
e
p
o
s
i
t
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
.
'
&
t
a
s
k
=
e
d
i
t
_
d
e
p
o
s
i
t
&
c
o
n
t
r
a
c
t
U
i
d
=
'
.
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
)
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
a
t
u
s
 
=
 
'
s
t
a
t
u
s
=
n
o
,
t
o
o
l
b
a
r
=
y
e
s
,
s
c
r
o
l
l
b
a
r
s
=
y
e
s
,
t
i
t
l
e
b
a
r
=
y
e
s
,
m
e
n
u
b
a
r
=
y
e
s
,
r
e
s
i
z
a
b
l
e
=
y
e
s
,
w
i
d
t
h
=
7
1
0
,
h
e
i
g
h
t
=
5
0
0
,
d
i
r
e
c
t
o
r
i
e
s
=
n
o
,
l
o
c
a
t
i
o
n
=
n
o
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
.
'
&
t
a
s
k
=
c
o
n
f
i
r
m
a
t
i
o
n
_
l
e
t
t
e
r
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
'
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
'
)
.
'
&
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
'
.
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
.
'
&
l
a
n
g
=
'
.
$
l
a
n
g
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
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
b
o
o
k
e
d
o
u
t
'
]
 
!
=
 
1
 
&
&
 
(
i
n
t
)
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
c
a
n
c
e
l
l
e
d
'
]
 
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
a
d
d
s
e
r
v
i
c
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
a
d
d
_
s
e
r
v
i
c
e
_
t
o
_
b
i
l
l
&
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
'
.
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
A
D
D
S
E
R
V
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
A
D
D
S
E
R
V
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
 
$
e
d
i
t
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
,
 
$
i
s
L
i
n
k
 
=
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
b
o
o
k
e
d
o
u
t
'
]
 
!
=
 
1
 
&
&
 
(
i
n
t
)
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
c
a
n
c
e
l
l
e
d
'
]
 
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
 
'
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
:
v
o
i
d
 
w
i
n
d
o
w
.
o
p
e
n
(
\
'
'
.
$
l
i
n
k
.
'
\
'
,
 
\
'
w
i
n
2
\
'
,
 
\
'
'
.
$
s
t
a
t
u
s
.
'
\
'
)
;
'
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
C
O
N
F
I
R
M
A
T
I
O
N
_
P
R
I
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
C
O
M
_
C
O
N
F
I
R
M
A
T
I
O
N
_
P
R
I
N
T
'
,
 
$
e
d
i
t
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
,
 
$
i
s
L
i
n
k
 
=
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
.
'
&
t
a
s
k
=
c
o
n
f
i
r
m
a
t
i
o
n
_
l
e
t
t
e
r
&
n
o
_
h
t
m
l
=
1
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
'
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
'
)
.
'
&
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
'
.
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
.
'
&
s
e
n
d
e
m
a
i
l
=
1
&
l
a
n
g
=
'
.
$
l
a
n
g
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
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
b
o
o
k
e
d
o
u
t
'
]
 
!
=
 
1
 
&
&
 
(
i
n
t
)
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
c
a
n
c
e
l
l
e
d
'
]
 
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
e
m
a
i
l
s
e
n
d
'
,
 
'
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
:
v
o
i
d
 
w
i
n
d
o
w
.
o
p
e
n
(
\
'
'
.
$
l
i
n
k
.
'
\
'
,
 
\
'
w
i
n
2
\
'
,
 
\
'
'
.
$
s
t
a
t
u
s
.
'
\
'
)
;
'
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
E
M
A
I
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
E
M
A
I
L
'
,
 
$
e
d
i
t
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
,
 
$
i
s
L
i
n
k
 
=
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
i
n
v
o
i
c
e
_
u
i
d
'
]
 
>
 
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
S
H
O
W
I
N
V
O
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
O
M
R
E
S
_
M
A
N
A
G
E
R
_
S
H
O
W
I
N
V
O
I
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
M
A
N
A
G
E
R
_
S
H
O
W
I
N
V
O
I
C
E
'
,
 
$
e
d
i
t
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
,
 
$
i
s
L
i
n
k
 
=
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
.
'
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
(
i
n
t
)
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
i
n
v
o
i
c
e
_
u
i
d
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
r
g
e
t
T
a
s
k
 
=
 
'
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
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
a
g
e
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
S
_
R
E
L
P
A
T
H
.
'
j
o
m
r
e
s
i
m
a
g
e
s
/
'
.
$
j
r
t
b
a
r
-
>
i
m
a
g
e
S
i
z
e
.
'
/
I
n
v
o
i
c
e
.
p
n
g
'
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
c
u
s
t
o
m
T
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
$
t
a
r
g
e
t
T
a
s
k
,
 
$
l
i
n
k
,
 
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
H
O
W
I
N
V
O
I
C
E
'
 
]
,
 
$
s
u
b
m
i
t
O
n
C
l
i
c
k
 
=
 
f
a
l
s
e
,
 
$
s
u
b
m
i
t
T
a
s
k
 
=
 
'
'
,
 
$
i
m
a
g
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
n
o
t
e
s
L
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
.
'
&
t
a
s
k
=
a
d
d
n
o
t
e
&
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
'
.
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
n
o
t
e
'
,
 
$
n
o
t
e
s
L
i
n
k
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
C
O
M
P
_
B
O
O
K
I
N
G
N
O
T
E
S
_
A
D
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
B
O
O
K
I
N
G
N
O
T
E
S
_
A
D
D
'
,
 
$
e
d
i
t
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
,
 
$
i
s
L
i
n
k
 
=
 
f
a
l
s
e
)
)
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
 
(
i
n
t
)
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
c
a
n
c
e
l
l
e
d
'
]
 
!
=
 
1
 
&
&
 
i
s
s
e
t
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
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
[
'
0
0
0
0
5
'
]
[
'
j
o
m
r
e
s
_
i
c
a
l
'
]
)
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
I
C
A
L
_
E
X
P
O
R
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
I
C
A
L
_
E
V
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
I
C
A
L
_
E
V
E
N
T
'
,
 
$
e
d
i
t
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
,
 
$
i
s
L
i
n
k
 
=
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
.
'
&
t
a
s
k
=
i
c
a
l
_
e
x
p
o
r
t
_
c
o
n
t
r
a
c
t
&
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
'
.
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
.
'
&
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
'
.
$
d
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
r
g
e
t
T
a
s
k
 
=
 
'
i
c
a
l
_
e
x
p
o
r
t
_
c
o
n
t
r
a
c
t
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
a
g
e
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
S
_
R
E
L
P
A
T
H
.
'
c
a
l
e
n
d
a
r
.
p
n
g
'
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
c
u
s
t
o
m
T
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
$
t
a
r
g
e
t
T
a
s
k
,
 
$
l
i
n
k
,
 
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
C
A
L
_
E
X
P
O
R
T
'
 
]
,
 
$
s
u
b
m
i
t
O
n
C
l
i
c
k
 
=
 
f
a
l
s
e
,
 
$
s
u
b
m
i
t
T
a
s
k
 
=
 
'
'
,
 
$
i
m
a
g
e
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
_
b
o
o
k
i
n
g
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
.
'
&
t
a
s
k
=
c
a
n
c
e
l
_
b
o
o
k
i
n
g
&
p
o
p
u
p
=
1
&
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
'
.
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
)
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
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
o
u
t
p
u
t
[
 
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
_
N
U
M
B
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
B
O
O
K
I
N
G
_
N
U
M
B
E
R
'
,
 
$
e
d
i
t
a
b
l
e
 
=
 
t
r
u
e
,
 
$
i
s
L
i
n
k
 
=
 
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
B
O
O
K
I
N
G
_
N
U
M
B
E
R
'
 
]
 
=
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
t
a
g
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
 
]
 
=
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
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
o
u
t
p
u
t
[
 
'
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
 
]
 
=
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
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
a
p
p
r
o
v
a
l
_
m
e
s
s
a
g
e
[
]
 
=
 
$
a
p
p
r
o
v
a
l
_
m
s
g
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
B
A
C
K
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
e
d
i
t
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
e
a
d
e
r
.
h
t
m
l
'
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
a
p
p
r
o
v
a
l
_
m
e
s
s
a
g
e
'
,
 
$
a
p
p
r
o
v
a
l
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

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
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

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
a
r
r
-
d
e
p
 
t
a
b

 
 
 
 
 
 
 
 
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
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
i
v
a
l
T
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
_
W
H
O
L
E
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
_
W
H
O
L
E
D
A
Y
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
p
a
r
t
u
r
e
T
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
_
W
H
O
L
E
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
_
W
H
O
L
E
D
A
Y
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
a
r
r
i
v
a
l
T
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
d
e
p
a
r
t
u
r
e
T
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
A
R
R
I
V
A
L
T
E
X
T
'
 
]
 
=
 
$
a
r
r
i
v
a
l
T
e
x
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
B
O
O
K
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
'
 
]
 
=
 
o
u
t
p
u
t
D
a
t
e
(
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
a
r
r
i
v
a
l
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
D
E
P
A
R
T
U
R
E
T
E
X
T
'
 
]
 
=
 
$
d
e
p
a
r
t
u
r
e
T
e
x
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
B
O
O
K
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
'
 
]
 
=
 
o
u
t
p
u
t
D
a
t
e
(
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
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
'
]
)
;


 
 
 
 
 
 
 
 
$
n
i
g
h
t
s
 
=
 
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
 
'
1
'
 
?
 
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
_
W
H
O
L
E
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
_
W
H
O
L
E
D
A
Y
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
 
:
 
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
,
 
f
a
l
s
e
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
)
 
{
 
/
/
 
J
i
n
t
o
u
r
 
p
r
o
p
e
r
t
y
 
b
o
o
k
i
n
g
s
 
w
i
l
l
 
p
r
o
b
a
b
l
y
 
n
o
t
 
w
a
n
t
 
t
o
 
s
h
o
w
 
t
h
i
s
 
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
,
 
s
o
 
w
e
 
w
o
n
'
t
 
a
d
d
 
i
t

 
 
 
 
 
 
 
 
 
 
 
 
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
N
I
G
H
T
S
'
 
]
 
=
 
$
n
i
g
h
t
s
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
N
U
M
_
N
I
G
H
T
S
'
 
]
 
=
 
c
o
u
n
t
(
e
x
p
l
o
d
e
(
'
,
'
,
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
d
a
t
e
_
r
a
n
g
e
_
s
t
r
i
n
g
'
]
)
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
[
'
r
o
o
m
d
e
e
t
s
'
]
)
 
&
&
 
(
i
n
t
)
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
a
p
p
r
o
v
e
d
'
]
 
=
=
 
1
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
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
[
'
r
o
o
m
d
e
e
t
s
'
]
 
a
s
 
$
r
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
B
o
o
k
i
n
g
_
b
l
a
c
k
_
b
o
o
k
i
n
g
 
=
 
$
r
d
[
'
b
l
a
c
k
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
B
o
o
k
i
n
g
_
r
e
c
e
p
t
i
o
n
_
b
o
o
k
i
n
g
 
=
 
$
r
d
[
'
r
e
c
e
p
t
i
o
n
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

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
r
o
o
m
B
o
o
k
i
n
g
_
b
l
a
c
k
_
b
o
o
k
i
n
g
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
T
y
p
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
B
O
O
K
I
N
G
T
Y
P
E
_
B
L
A
C
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
E
B
_
R
O
O
M
_
B
O
O
K
I
N
G
T
Y
P
E
_
B
L
A
C
K
'
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
(
i
n
t
)
 
$
r
o
o
m
B
o
o
k
i
n
g
_
r
e
c
e
p
t
i
o
n
_
b
o
o
k
i
n
g
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
T
y
p
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
B
O
O
K
I
N
G
T
Y
P
E
_
R
E
C
E
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
E
B
_
R
O
O
M
_
B
O
O
K
I
N
G
T
Y
P
E
_
R
E
C
E
P
T
I
O
N
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
b
o
o
k
i
n
g
T
y
p
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
B
O
O
K
I
N
G
T
Y
P
E
_
I
N
T
E
R
N
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
E
B
_
R
O
O
M
_
B
O
O
K
I
N
G
T
Y
P
E
_
I
N
T
E
R
N
E
T
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
b
o
o
k
i
n
g
T
y
p
e
 
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
B
O
O
K
I
N
G
T
Y
P
E
_
E
X
P
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
R
O
O
M
_
B
O
O
K
I
N
G
T
Y
P
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
B
O
O
K
I
N
G
T
Y
P
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
 
'
B
O
O
K
I
N
G
T
Y
P
E
'
 
]
 
=
 
$
b
o
o
k
i
n
g
T
y
p
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
A
S
S
I
G
N
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
A
S
S
I
G
N
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
A
S
S
I
G
N
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
 
'
B
O
O
K
E
R
S
U
S
E
R
N
A
M
E
'
 
]
 
=
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
u
s
e
r
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
B
O
O
K
I
N
G
S
P
E
C
I
A
L
R
E
Q
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
R
O
O
M
_
B
O
O
K
I
N
G
S
P
E
C
I
A
L
R
E
Q
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
B
O
O
K
I
N
G
S
P
E
C
I
A
L
R
E
Q
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
S
P
E
C
I
A
L
R
E
Q
S
'
 
]
 
=
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
s
p
e
c
i
a
l
_
r
e
q
s
'
]
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
B
A
C
K
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
e
d
i
t
_
b
o
o
k
i
n
g
_
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
s
_
a
r
r
d
e
p
.
h
t
m
l
'
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

 
 
 
 
 
 
 
 
$
a
r
r
d
e
p
_
t
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


 
 
 
 
 
 
 
 
/
/
g
u
e
s
t
 
t
a
b

 
 
 
 
 
 
 
 
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
g
u
e
s
t
_
t
y
p
e
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
N
F
I
G
_
V
A
R
I
A
N
C
E
S
_
C
U
S
T
O
M
E
R
T
Y
P
E
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
O
M
R
E
S
_
C
O
N
F
I
G
_
V
A
R
I
A
N
C
E
S
_
C
U
S
T
O
M
E
R
T
Y
P
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
C
O
N
F
I
G
_
V
A
R
I
A
N
C
E
S
_
C
U
S
T
O
M
E
R
T
Y
P
E
S
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
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
[
'
g
u
e
s
t
t
y
p
e
'
]
 
a
s
 
$
t
y
p
e
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
T
I
T
L
E
'
 
]
 
=
 
$
t
y
p
e
[
 
'
t
i
t
l
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
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
Q
T
Y
'
 
]
 
=
 
$
t
y
p
e
[
 
'
q
t
y
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
t
y
p
e
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


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
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
A
R
R
I
V
A
L
F
I
R
S
T
N
A
M
E
_
E
X
P
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
A
R
R
I
V
A
L
F
I
R
S
T
N
A
M
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
A
R
R
I
V
A
L
F
I
R
S
T
N
A
M
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
 
'
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
 
]
 
=
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
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
o
u
t
p
u
t
[
 
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
A
R
R
I
V
A
L
S
U
R
N
A
M
E
_
E
X
P
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
A
R
R
I
V
A
L
S
U
R
N
A
M
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
A
R
R
I
V
A
L
S
U
R
N
A
M
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
 
'
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
 
]
 
=
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
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
o
u
t
p
u
t
[
 
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
 
'
G
U
E
S
T
_
H
O
U
S
E
'
 
]
 
=
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
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
o
u
t
p
u
t
[
 
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
 
'
G
U
E
S
T
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
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
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
o
u
t
p
u
t
[
 
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
 
'
G
U
E
S
T
_
T
O
W
N
'
 
]
 
=
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
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
o
u
t
p
u
t
[
 
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
G
U
E
S
T
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
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
c
o
u
n
t
y
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
G
U
E
S
T
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
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
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
o
u
t
p
u
t
[
 
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
 
'
G
U
E
S
T
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
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
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
o
u
t
p
u
t
[
 
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
 
'
G
U
E
S
T
_
T
E
L
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
 
]
 
=
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
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
o
u
t
p
u
t
[
 
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
 
'
G
U
E
S
T
_
T
E
L
_
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
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
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
o
u
t
p
u
t
[
 
'
H
G
U
E
S
T
_
V
A
T
_
N
U
M
B
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
G
U
E
S
T
_
V
A
T
_
N
U
M
B
E
R
'
 
]
 
=
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
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

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
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
E
M
A
I
L
_
L
I
N
K
'
 
]
 
=
 
'
m
a
i
l
t
o
:
'

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
.
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
e
m
a
i
l
'
]

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
.
'
?
s
u
b
j
e
c
t
=
'
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
B
O
O
K
I
N
G
_
N
U
M
B
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
.
'
 
'

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
.
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
t
a
g
'
]

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
.
'
 
@
 
'

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
.
$
c
u
r
r
e
n
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
.
'
&
b
o
d
y
=
'
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
R
E
S
_
C
O
M
_
C
O
N
F
I
R
M
A
T
I
O
N
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
C
O
N
F
I
R
M
A
T
I
O
N
_
D
E
A
R
'
,
 
f
a
l
s
e
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
.
u
c
f
i
r
s
t
(
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
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
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
.
'
 
'

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
.
u
c
f
i
r
s
t
(
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
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
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
.
'
 
R
E
 
'

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
B
O
O
K
I
N
G
_
N
U
M
B
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
.
'
 
'

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
.
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
t
a
g
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
E
M
A
I
L
_
A
D
D
R
E
S
S
'
 
]
 
=
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
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
U
E
S
T
_
I
M
A
G
E
'
 
]
 
=
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
i
m
a
g
e
'
]
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
B
A
C
K
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
e
d
i
t
_
b
o
o
k
i
n
g
_
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
s
_
g
u
e
s
t
.
h
t
m
l
'
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
g
u
e
s
t
_
t
y
p
e
_
r
o
w
s
'
,
 
$
g
u
e
s
t
_
t
y
p
e
_
r
o
w
s
)
;

 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
t
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


 
 
 
 
 
 
 
 
/
/
r
o
o
m
s
 
t
a
b

 
 
 
 
 
 
 
 
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
o
m
s
_
t
a
b
_
r
e
p
l
a
c
e
m
e
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
r
o
o
m
s
_
t
a
b
_
r
e
p
l
a
c
e
m
e
n
t
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
r
o
o
m
s
_
t
a
b
_
r
e
p
l
a
c
e
m
e
n
t
)
)
 
{

	
	
	
$
r
o
o
m
_
t
a
b
_
n
a
m
e
 
=
 
'
'
;

	
	
	
$
r
o
o
m
_
t
e
m
p
l
a
t
e
 
=
 
'
'
;


	
	
	
/
/
o
n
l
y
 
d
i
s
p
l
a
y
 
t
h
e
 
r
o
o
m
s
 
t
a
b
 
i
f
 
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
 
i
s
 
a
p
p
r
o
v
e
d

	
	
	
i
f
 
(
(
i
n
t
)
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
a
p
p
r
o
v
e
d
'
]
 
=
=
 
1
)
 
{

	
	
	
	
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

	
	
	
	
f
o
r
e
a
c
h
 
(
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
[
'
r
o
o
m
d
e
e
t
s
'
]
 
a
s
 
$
r
d
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
E
B
_
R
O
O
M
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
E
B
_
R
O
O
M
_
N
A
M
E
'
)
;

	
	
	
	
	
$
r
[
 
'
R
I
N
F
O
_
N
A
M
E
'
 
]
 
=
 
$
r
d
[
 
'
r
o
o
m
_
n
a
m
e
'
 
]
;

	
	
	
	
	
$
r
[
 
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
A
T
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
A
T
E
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
A
T
E
T
I
T
L
E
'
)
;

	
	
	
	
	
$
r
[
 
'
R
I
N
F
O
_
T
A
R
I
F
F
'
 
]
 
=
 
$
r
d
[
 
'
r
a
t
e
_
t
i
t
l
e
'
 
]
;


	
	
	
	
	
$
r
[
 
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
N
U
M
B
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
E
B
_
R
O
O
M
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
r
[
 
'
R
I
N
F
O
_
N
U
M
B
E
R
'
 
]
 
=
 
$
r
d
[
 
'
r
o
o
m
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
r
[
 
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
L
O
O
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
E
B
_
R
O
O
M
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
r
[
 
'
R
I
N
F
O
_
R
O
O
M
_
F
L
O
O
R
'
 
]
 
=
 
$
r
d
[
 
'
r
o
o
m
_
f
l
o
o
r
'
 
]
;


	
	
	
	
	
$
r
[
 
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
E
B
_
R
O
O
M
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
r
[
 
'
R
I
N
F
O
_
M
A
X
_
P
E
O
P
L
E
'
 
]
 
=
 
$
r
d
[
 
'
m
a
x
_
p
e
o
p
l
e
'
 
]
;

	
	
	
	
	

	
	
	
	
	
$
r
[
 
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
C
L
A
S
S
_
A
B
B
V
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
R
O
O
M
_
C
L
A
S
S
_
A
B
B
V
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
C
L
A
S
S
_
A
B
B
V
'
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
c
u
r
r
e
n
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
-
>
a
l
l
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
[
$
r
d
[
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
]
]
[
'
r
o
o
m
_
c
l
a
s
s
_
a
b
b
v
'
]
)
)
 
{

	
	
	
	
	
	
$
t
y
p
e
 
=
 
$
c
u
r
r
e
n
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
-
>
a
l
l
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
[
$
r
d
[
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
]
]
[
'
r
o
o
m
_
c
l
a
s
s
_
a
b
b
v
'
]
;

	
	
	
	
	
	
$
r
[
 
'
T
Y
P
E
'
 
]
 
=
 
$
t
y
p
e
;

	
	
	
	
	
	

	
	
	
	
	
}
 
e
l
s
e
 
{
 
/
/
 
I
f
 
a
 
r
o
o
m
 
h
a
s
 
b
e
e
n
 
r
e
m
o
v
e
d
 
(
 
o
r
 
t
h
e
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
c
h
a
n
g
e
d
 
)
 
t
h
e
n
 
w
e
 
d
o
n
'
t
 
k
n
o
w
 
a
n
y
t
h
i
n
g
 
a
b
o
u
t
 
t
h
e
 
o
l
d
 
r
o
o
m
.

	
	
	
	
	
	
$
r
[
 
'
T
Y
P
E
'
 
]
 
=
 
"
U
n
k
n
o
w
n
"
;

	
	
	
	
	
}

	
	
	
	
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
B
A
C
K
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
e
d
i
t
_
b
o
o
k
i
n
g
_
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
s
_
r
o
o
m
.
h
t
m
l
'
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
r
o
o
m
_
t
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
r
o
o
m
_
t
a
b
_
n
a
m
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
R
O
O
M
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

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
t
a
b
_
n
a
m
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
I
N
T
O
U
R
_
R
E
G
P
R
O
P
_
M
A
N
A
G
E
M
E
N
T
P
R
O
C
E
S
S
_
T
O
U
R
S
'
,
 
'
_
J
I
N
T
O
U
R
_
R
E
G
P
R
O
P
_
M
A
N
A
G
E
M
E
N
T
P
R
O
C
E
S
S
_
T
O
U
R
S
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
r
o
o
m
_
t
e
m
p
l
a
t
e
 
=
 
$
r
o
o
m
s
_
t
a
b
_
r
e
p
l
a
c
e
m
e
n
t
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
p
a
y
m
e
n
t
 
t
a
b

 
 
 
 
 
 
 
 
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
e
x
t
r
a
s
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


	
	
$
t
a
x
r
a
t
e
 
=
 
0
;

	
	

 
 
 
 
 
 
 
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
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
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
'
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
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
[
'
e
x
t
r
a
d
e
e
t
s
'
]
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
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
[
'
e
x
t
r
a
d
e
e
t
s
'
]
 
a
s
 
$
e
x
t
r
a
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
q
u
a
n
t
i
t
y
 
=
 
$
e
x
t
r
a
[
'
q
t
y
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
i
c
e
 
=
 
$
e
x
t
r
a
[
'
p
r
i
c
e
'
]
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
p
r
i
c
e
s
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
 
=
=
 
'
0
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
x
_
r
a
t
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
 
$
e
x
t
r
a
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
-
>
g
a
t
h
e
r
_
d
a
t
a
(
$
t
a
x
_
r
a
t
e
_
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
x
r
a
t
e
 
=
 
(
f
l
o
a
t
)
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
-
>
r
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
x
 
=
 
(
$
p
r
i
c
e
 
/
 
1
0
0
)
 
*
 
$
t
a
x
r
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
c
_
p
r
i
c
e
 
=
 
$
p
r
i
c
e
 
+
 
$
t
a
x
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
c
_
p
r
i
c
e
 
=
 
$
p
r
i
c
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
_
t
a
x
_
o
u
t
p
u
t
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
t
a
x
r
a
t
e
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
_
t
a
x
_
o
u
t
p
u
t
 
=
 
$
t
a
x
r
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
E
X
T
R
A
_
N
A
M
E
'
 
]
 
=
 
$
e
x
t
r
a
[
'
n
a
m
e
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
E
X
T
R
A
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
i
n
c
_
p
r
i
c
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
E
X
T
R
A
_
T
A
X
'
 
]
 
=
 
$
e
x
t
r
a
_
t
a
x
_
o
u
t
p
u
t
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
E
X
T
R
A
_
Q
U
A
N
T
I
T
Y
'
 
]
 
=
 
$
q
u
a
n
t
i
t
y
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
s
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


 
 
 
 
 
 
 
 
$
o
t
h
e
r
_
s
e
r
v
i
c
e
s
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

 
 
 
 
 
 
 
 
$
o
t
h
e
r
S
e
r
v
i
c
e
T
o
t
a
l
 
=
 
0
.
0
0
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
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
[
'
e
x
t
r
a
s
e
r
v
i
c
e
'
]
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
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
[
'
e
x
t
r
a
s
e
r
v
i
c
e
'
]
 
a
s
 
$
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
r
v
i
c
e
_
v
a
l
u
e
 
=
 
$
e
[
'
s
e
r
v
i
c
e
_
v
a
l
u
e
'
]
 
*
 
$
e
[
'
s
e
r
v
i
c
e
_
q
t
y
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
x
s
_
t
a
x
 
=
 
(
$
s
e
r
v
i
c
e
_
v
a
l
u
e
 
/
 
1
0
0
)
 
*
 
(
f
l
o
a
t
)
 
$
e
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
_
v
a
l
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
t
h
e
r
S
e
r
v
i
c
e
T
o
t
a
l
 
=
 
$
o
t
h
e
r
S
e
r
v
i
c
e
T
o
t
a
l
 
+
 
(
$
s
e
r
v
i
c
e
_
v
a
l
u
e
 
+
 
$
x
s
_
t
a
x
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
O
T
H
E
R
_
S
E
R
V
I
C
E
'
 
]
 
=
 
$
e
[
'
s
e
r
v
i
c
e
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
O
T
H
E
R
_
S
E
R
V
I
C
E
_
V
A
L
U
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
s
e
r
v
i
c
e
_
v
a
l
u
e
 
+
 
$
x
s
_
t
a
x
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
t
h
e
r
_
s
e
r
v
i
c
e
s
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


 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
i
n
v
o
i
c
e
_
u
i
d
'
]
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
r
p
o
r
t
a
l
_
i
n
v
o
i
c
e
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
 
=
 
n
e
w
 
j
r
p
o
r
t
a
l
_
i
n
v
o
i
c
e
(
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
i
d
 
=
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
i
n
v
o
i
c
e
_
u
i
d
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
m
a
i
n
d
e
r
t
o
p
a
y
 
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
g
e
t
_
l
i
n
e
_
i
t
e
m
s
_
b
a
l
a
n
c
e
(
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
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
p
a
i
d
'
]
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
m
a
i
n
d
e
r
t
o
p
a
y
 
=
 
(
$
o
t
h
e
r
S
e
r
v
i
c
e
T
o
t
a
l
 
+
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
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
)
 
-
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
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

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
m
a
i
n
d
e
r
t
o
p
a
y
 
=
 
$
o
t
h
e
r
S
e
r
v
i
c
e
T
o
t
a
l
 
+
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
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
H
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
'
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
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
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
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
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
p
a
i
d
'
]
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
p
o
s
i
t
P
a
i
d
 
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
Y
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
C
O
M
_
M
R
_
Y
E
S
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
d
e
p
o
s
i
t
P
a
i
d
 
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
M
R
_
N
O
'
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
_
P
A
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
_
P
A
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
 
'
D
E
P
O
S
I
T
P
A
I
D
'
 
]
 
=
 
$
d
e
p
o
s
i
t
P
a
i
d
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
 
'
B
O
O
K
I
N
G
_
D
E
P
O
S
I
T
_
R
E
Q
U
I
R
E
D
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
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
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
C
O
N
T
R
A
C
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
C
O
N
T
R
A
C
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
C
O
N
T
R
A
C
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
B
O
O
K
I
N
G
_
C
O
N
T
R
A
C
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
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
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
_
R
E
F
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
_
R
E
F
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
_
R
E
F
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
B
O
O
K
I
N
G
_
D
E
P
O
S
I
T
_
R
E
F
'
 
]
 
=
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
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
f
'
]
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
)
 
{
 
/
/
 
J
i
n
t
o
u
r
 
p
r
o
p
e
r
t
y
 
b
o
o
k
i
n
g
s
 
w
i
l
l
 
p
r
o
b
a
b
l
y
 
n
o
t
 
w
a
n
t
 
t
o
 
s
h
o
w
 
t
h
i
s
 
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
,
 
s
o
 
w
e
 
w
o
n
'
t
 
a
d
d
 
i
t

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
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
A
_
S
U
P
P
L
I
M
E
N
T
S
_
S
I
N
G
L
E
P
E
R
S
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
A
_
S
U
P
P
L
I
M
E
N
T
S
_
S
I
N
G
L
E
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
C
O
M
_
A
_
S
U
P
P
L
I
M
E
N
T
S
_
S
I
N
G
L
E
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
 
'
S
I
N
G
L
E
_
P
E
R
S
O
N
_
S
U
P
P
L
I
M
E
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
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
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
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
t
a
x
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
X
T
R
A
_
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
X
T
R
A
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
E
X
T
R
A
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
O
T
A
L
I
N
V
O
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
O
T
A
L
I
N
V
O
I
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
O
T
A
L
I
N
V
O
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
E
X
T
R
A
S
O
P
T
I
O
N
S
V
A
L
U
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
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
[
'
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
A
D
D
S
E
R
V
I
C
E
_
B
O
O
K
I
N
G
D
E
S
C
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
A
D
D
S
E
R
V
I
C
E
_
B
O
O
K
I
N
G
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
A
D
D
S
E
R
V
I
C
E
_
B
O
O
K
I
N
G
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
L
E
T
T
E
R
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
L
E
T
T
E
R
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
L
E
T
T
E
R
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
o
t
h
e
r
S
e
r
v
i
c
e
T
o
t
a
l
 
+
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
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
d
e
e
t
s
'
]
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
R
E
M
A
I
N
D
E
R
T
O
P
A
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
R
E
M
A
I
N
D
E
R
T
O
P
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
R
E
M
A
I
N
D
E
R
T
O
P
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
 
'
R
E
M
A
I
N
D
E
R
_
T
O
_
P
A
Y
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
r
e
m
a
i
n
d
e
r
t
o
p
a
y
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
B
A
C
K
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
e
d
i
t
_
b
o
o
k
i
n
g
_
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
s
_
p
a
y
m
e
n
t
.
h
t
m
l
'
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
e
x
t
r
a
s
_
r
o
w
s
'
,
 
$
e
x
t
r
a
s
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
a
d
d
R
o
w
s
(
'
o
t
h
e
r
_
s
e
r
v
i
c
e
s
_
r
o
w
s
'
,
 
$
o
t
h
e
r
_
s
e
r
v
i
c
e
s
_
r
o
w
s
)
;

 
 
 
 
 
 
 
 
$
p
a
y
m
e
n
t
_
t
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


 
 
 
 
 
 
 
 
/
/
n
o
t
e
s
 
t
a
b

 
 
 
 
 
 
 
 
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
n
o
t
e
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


 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
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
[
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
]
[
'
n
o
t
e
d
e
e
t
s
'
]
 
a
s
 
$
n
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
N
O
T
E
'
 
]
 
=
 
$
n
[
'
n
o
t
e
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
D
A
T
E
T
I
M
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
D
a
t
e
(
$
n
[
'
t
i
m
e
s
t
a
m
p
'
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
E
D
I
T
L
I
N
K
'
 
]
 
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
N
O
S
E
F
.
'
&
t
a
s
k
=
e
d
i
t
n
o
t
e
&
n
o
t
e
_
i
d
=
'
.
$
n
[
'
i
d
'
]
.
'
&
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
'
.
(
i
n
t
)
 
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
r
[
 
'
E
D
I
T
T
E
X
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
C
O
M
P
_
B
O
O
K
I
N
G
N
O
T
E
S
_
E
D
I
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
B
O
O
K
I
N
G
N
O
T
E
S
_
E
D
I
T
'
,
 
$
e
d
i
t
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
,
 
$
i
s
L
i
n
k
 
=
 
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
D
E
L
E
T
E
L
I
N
K
'
 
]
 
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
N
O
S
E
F
.
'
&
t
a
s
k
=
d
e
l
e
t
e
n
o
t
e
&
n
o
t
e
_
i
d
=
'
.
$
n
[
'
i
d
'
]
.
'
&
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
'
.
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
r
[
 
'
D
E
L
E
T
E
T
E
X
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
C
O
M
P
_
B
O
O
K
I
N
G
N
O
T
E
S
_
D
E
L
E
T
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
B
O
O
K
I
N
G
N
O
T
E
S
_
D
E
L
E
T
E
'
,
 
$
e
d
i
t
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
,
 
$
i
s
L
i
n
k
 
=
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
o
t
e
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
B
A
C
K
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
v
i
e
w
_
n
o
t
e
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
n
o
t
e
_
r
o
w
s
)
;

 
 
 
 
 
 
 
 
$
n
o
t
e
_
t
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


 
 
 
 
 
 
 
 
/
/
g
e
n
e
r
a
t
e
 
t
h
e
 
t
a
b
s

 
 
 
 
 
 
 
 
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
c
o
n
t
e
n
t
_
t
a
b
s
'
)
;

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
 
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
c
o
n
t
e
n
t
_
t
a
b
s
(
)
;

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
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
s
(
)
;

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
s
t
a
r
t
P
a
n
e
l
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
A
R
R
I
V
A
L
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

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
s
e
t
c
o
n
t
e
n
t
(
$
a
r
r
d
e
p
_
t
e
m
p
l
a
t
e
)
;

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
i
n
s
e
r
t
C
o
n
t
e
n
t
(
)
;

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
e
n
d
P
a
n
e
l
(
)
;


 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
s
t
a
r
t
P
a
n
e
l
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
c
o
n
t
e
n
t
P
a
n
e
l
-
>
s
e
t
c
o
n
t
e
n
t
(
$
g
u
e
s
t
_
t
e
m
p
l
a
t
e
)
;

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
i
n
s
e
r
t
C
o
n
t
e
n
t
(
)
;

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
e
n
d
P
a
n
e
l
(
)
;


	
	
i
f
 
(
$
r
o
o
m
_
t
a
b
_
n
a
m
e
 
!
=
 
'
'
)
 
{

	
	
	
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
s
t
a
r
t
P
a
n
e
l
(
$
r
o
o
m
_
t
a
b
_
n
a
m
e
)
;

	
	
	
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
s
e
t
c
o
n
t
e
n
t
(
$
r
o
o
m
_
t
e
m
p
l
a
t
e
)
;

	
	
	
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
i
n
s
e
r
t
C
o
n
t
e
n
t
(
)
;

	
	
	
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
e
n
d
P
a
n
e
l
(
)
;

	
	
}


 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
s
t
a
r
t
P
a
n
e
l
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
P
A
Y
M
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
P
A
Y
M
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
c
o
n
t
e
n
t
P
a
n
e
l
-
>
s
e
t
c
o
n
t
e
n
t
(
$
p
a
y
m
e
n
t
_
t
e
m
p
l
a
t
e
)
;

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
i
n
s
e
r
t
C
o
n
t
e
n
t
(
)
;

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
e
n
d
P
a
n
e
l
(
)
;


 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
s
t
a
r
t
P
a
n
e
l
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
C
O
M
P
_
B
O
O
K
I
N
G
N
O
T
E
S
_
V
I
E
W
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
B
O
O
K
I
N
G
N
O
T
E
S
_
V
I
E
W
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

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
s
e
t
c
o
n
t
e
n
t
(
$
n
o
t
e
_
t
e
m
p
l
a
t
e
)
;

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
i
n
s
e
r
t
C
o
n
t
e
n
t
(
)
;

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
e
n
d
P
a
n
e
l
(
)
;


 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
P
a
n
e
l
-
>
e
n
d
T
a
b
s
(
)
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
B
O
O
K
A
G
U
E
S
T
O
U
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
B
O
O
K
A
G
U
E
S
T
O
U
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
B
O
O
K
I
N
G
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
A
R
R
I
V
A
L
F
I
R
S
T
N
A
M
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
A
R
R
I
V
A
L
F
I
R
S
T
N
A
M
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
A
R
R
I
V
A
L
S
U
R
N
A
M
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
A
R
R
I
V
A
L
S
U
R
N
A
M
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
E
B
_
R
O
O
M
_
B
O
O
K
I
N
G
S
P
E
C
I
A
L
R
E
Q
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
B
O
O
K
I
N
G
S
P
E
C
I
A
L
R
E
Q
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
E
B
_
R
O
O
M
_
B
O
O
K
I
N
G
T
Y
P
E
_
B
L
A
C
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
E
B
_
R
O
O
M
_
B
O
O
K
I
N
G
T
Y
P
E
_
B
L
A
C
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
B
O
O
K
I
N
G
T
Y
P
E
_
R
E
C
E
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
E
B
_
R
O
O
M
_
B
O
O
K
I
N
G
T
Y
P
E
_
R
E
C
E
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
B
O
O
K
I
N
G
T
Y
P
E
_
I
N
T
E
R
N
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
E
B
_
R
O
O
M
_
B
O
O
K
I
N
G
T
Y
P
E
_
I
N
T
E
R
N
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
B
O
O
K
I
N
G
T
Y
P
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
B
O
O
K
I
N
G
T
Y
P
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
Y
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
C
O
M
_
M
R
_
Y
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
C
O
M
_
M
R
_
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
M
R
_
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
E
B
_
R
O
O
M
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
E
B
_
R
O
O
M
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
E
B
_
R
O
O
M
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
E
B
_
R
O
O
M
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
E
B
_
R
O
O
M
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
E
B
_
R
O
O
M
_
D
I
S
A
B
L
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
R
O
O
M
_
D
I
S
A
B
L
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
E
B
_
R
O
O
M
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
C
L
A
S
S
_
A
B
B
V
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
C
L
A
S
S
_
A
B
B
V
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
_
P
A
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
C
O
N
T
R
A
C
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
C
O
N
T
R
A
C
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
_
R
E
F
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
_
R
E
F
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
A
_
S
U
P
P
L
I
M
E
N
T
S
_
S
I
N
G
L
E
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
C
O
M
_
A
_
S
U
P
P
L
I
M
E
N
T
S
_
S
I
N
G
L
E
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
N
F
I
G
_
V
A
R
I
A
N
C
E
S
_
C
U
S
T
O
M
E
R
T
Y
P
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
C
O
N
F
I
G
_
V
A
R
I
A
N
C
E
S
_
C
U
S
T
O
M
E
R
T
Y
P
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
C
O
M
_
M
R
_
E
X
T
R
A
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
E
X
T
R
A
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
C
O
M
_
A
D
D
S
E
R
V
I
C
E
_
B
O
O
K
I
N
G
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
A
D
D
S
E
R
V
I
C
E
_
B
O
O
K
I
N
G
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
I
N
V
O
I
C
E
_
L
E
T
T
E
R
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
L
E
T
T
E
R
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
R
E
M
A
I
N
D
E
R
T
O
P
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
R
E
M
A
I
N
D
E
R
T
O
P
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
C
O
M
P
_
B
O
O
K
I
N
G
N
O
T
E
S
_
V
I
E
W
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
B
O
O
K
I
N
G
N
O
T
E
S
_
V
I
E
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
O
T
A
L
I
N
V
O
I
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
O
T
A
L
I
N
V
O
I
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

