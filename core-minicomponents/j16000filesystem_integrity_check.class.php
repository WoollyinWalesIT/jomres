
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
f
i
l
e
s
y
s
t
e
m
_
i
n
t
e
g
r
i
t
y
_
c
h
e
c
k

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
 
'
'
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
I
N
T
E
G
R
I
T
Y
_
C
H
E
C
K
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
I
N
T
E
G
R
I
T
Y
_
C
H
E
C
K
'
,
 
'
I
N
T
E
G
R
I
T
Y
_
C
H
E
C
K
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
I
N
T
E
G
R
I
T
Y
_
C
H
E
C
K
_
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
I
N
T
E
G
R
I
T
Y
_
C
H
E
C
K
_
D
E
S
C
'
,
 
'
I
N
T
E
G
R
I
T
Y
_
C
H
E
C
K
_
D
E
S
C
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
I
N
T
E
G
R
I
T
Y
_
C
H
E
C
K
_
F
I
L
E
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
I
N
T
E
G
R
I
T
Y
_
C
H
E
C
K
_
F
I
L
E
N
A
M
E
'
,
 
'
I
N
T
E
G
R
I
T
Y
_
C
H
E
C
K
_
F
I
L
E
N
A
M
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
I
N
T
E
G
R
I
T
Y
_
C
H
E
C
K
_
L
O
C
A
L
H
A
S
H
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
I
N
T
E
G
R
I
T
Y
_
C
H
E
C
K
_
L
O
C
A
L
H
A
S
H
'
,
 
'
I
N
T
E
G
R
I
T
Y
_
C
H
E
C
K
_
L
O
C
A
L
H
A
S
H
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
I
N
T
E
G
R
I
T
Y
_
C
H
E
C
K
_
B
U
I
L
D
H
A
S
H
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
I
N
T
E
G
R
I
T
Y
_
C
H
E
C
K
_
B
U
I
L
D
H
A
S
H
'
,
 
'
I
N
T
E
G
R
I
T
Y
_
C
H
E
C
K
_
B
U
I
L
D
H
A
S
H
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
h
a
s
h
e
s
 
=
 
j
s
o
n
_
d
e
c
o
d
e
(
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
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
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
T
_
D
I
R
E
C
T
O
R
Y
.
J
R
D
S
.
'
h
a
s
h
e
s
'
)
)
;

 
 
 
 
 
 
 
 
$
f
i
l
e
s
_
c
o
u
n
t
 
=
 
c
o
u
n
t
(
$
h
a
s
h
e
s
)
;


 
 
 
 
 
 
 
 
f
o
r
 
(
$
i
 
=
 
0
;
 
$
i
 
<
 
$
f
i
l
e
s
_
c
o
u
n
t
;
 
+
+
$
i
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
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
T
_
D
I
R
E
C
T
O
R
Y
.
J
R
D
S
.
$
h
a
s
h
e
s
[
$
i
]
-
>
f
i
l
e
n
a
m
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
o
c
a
l
_
h
a
s
h
 
=
 
m
d
5
(
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
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
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
T
_
D
I
R
E
C
T
O
R
Y
.
J
R
D
S
.
$
h
a
s
h
e
s
[
$
i
]
-
>
f
i
l
e
n
a
m
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
h
a
s
h
e
s
[
$
i
]
-
>
l
o
c
a
l
_
h
a
s
h
 
=
 
$
l
o
c
a
l
_
h
a
s
h
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
h
a
s
h
e
s
[
$
i
]
-
>
h
a
s
h
_
o
k
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
h
a
s
h
e
s
[
$
i
]
-
>
h
a
s
h
_
c
l
a
s
s
 
=
 
'
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
h
a
s
h
e
s
[
$
i
]
-
>
h
a
s
h
 
!
=
 
$
h
a
s
h
e
s
[
$
i
]
-
>
l
o
c
a
l
_
h
a
s
h
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
h
a
s
h
e
s
[
$
i
]
-
>
h
a
s
h
_
o
k
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
h
a
s
h
e
s
[
$
i
]
-
>
h
a
s
h
_
c
l
a
s
s
 
=
 
'
a
l
e
r
t
-
w
a
r
n
i
n
g
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
h
a
s
h
e
s
[
$
i
]
-
>
h
a
s
h
_
o
k
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
h
a
s
h
e
s
[
$
i
]
-
>
h
a
s
h
_
c
l
a
s
s
 
=
 
'
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


 
 
 
 
 
 
 
 
 
 
 
 
$
o
b
j
 
=
 
$
h
a
s
h
e
s
[
$
i
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
 
=
 
(
a
r
r
a
y
)
 
$
o
b
j
;

 
 
 
 
 
 
 
 
 
 
 
 
$
h
a
s
h
e
s
[
$
i
]
 
=
 
$
a
r
r
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
h
a
s
h
e
s
 
a
s
 
$
h
a
s
h
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
h
a
s
h
[
'
h
a
s
h
_
o
k
'
]
 
!
=
 
t
r
u
e
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
h
a
s
h
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
r
o
w
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
f
i
l
e
s
y
s
t
e
m
_
i
n
t
e
g
r
i
t
y
_
c
h
e
c
k
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
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
h
1
>
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
I
N
T
E
G
R
I
T
Y
_
C
H
E
C
K
_
N
O
P
R
O
B
L
E
M
S
'
,
 
'
I
N
T
E
G
R
I
T
Y
_
C
H
E
C
K
_
N
O
P
R
O
B
L
E
M
S
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
<
/
h
1
>
'
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

