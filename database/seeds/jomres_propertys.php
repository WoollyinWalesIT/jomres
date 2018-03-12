
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
7
 
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
e
m
a
i
l
 
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
m
a
i
l
f
r
o
m
'
)
;
 
/
/
w
e
`
l
l
 
s
e
t
 
t
h
i
s
 
t
o
 
t
h
e
 
s
i
t
e
 
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


$
q
u
e
r
y
 
=
 
"
T
R
U
N
C
A
T
E
 
T
A
B
L
E
 
`
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
p
r
o
p
e
r
t
y
s
`
;
"
;


i
f
 
(
!
d
o
I
n
s
e
r
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
)
 
{

	
$
t
h
i
s
-
>
s
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
'
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
t
r
u
n
c
a
t
e
 
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
p
r
o
p
e
r
t
y
s
 
t
a
b
l
e
'
,
 
'
d
a
n
g
e
r
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


$
q
u
e
r
y
 
=
 
"

I
N
S
E
R
T
 
I
N
T
O
 
`
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
p
r
o
p
e
r
t
y
s
`
 
(
`
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
`
,
 
`
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
`
,
 
`
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
t
r
e
e
t
`
,
 
`
p
r
o
p
e
r
t
y
_
t
o
w
n
`
,
 
`
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
`
,
 
`
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
`
,
 
`
p
r
o
p
e
r
t
y
_
p
o
s
t
c
o
d
e
`
,
 
`
p
r
o
p
e
r
t
y
_
t
e
l
`
,
 
`
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
a
x
`
,
 
`
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
`
,
 
`
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
`
,
 
`
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
p
p
i
n
g
l
i
n
k
`
,
 
`
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
`
,
 
`
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
h
e
c
k
i
n
_
t
i
m
e
s
`
,
 
`
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
r
e
a
_
a
c
t
i
v
i
t
i
e
s
`
,
 
`
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
r
i
v
i
n
g
_
d
i
r
e
c
t
i
o
n
s
`
,
 
`
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
i
r
p
o
r
t
s
`
,
 
`
p
r
o
p
e
r
t
y
_
o
t
h
e
r
t
r
a
n
s
p
o
r
t
`
,
 
`
p
r
o
p
e
r
t
y
_
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
s
`
,
 
`
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
`
,
 
`
p
u
b
l
i
s
h
e
d
`
,
 
`
s
t
a
r
s
`
,
 
`
s
u
p
e
r
i
o
r
`
,
 
`
p
t
y
p
e
_
i
d
`
,
 
`
a
p
i
k
e
y
`
,
 
`
l
a
t
`
,
 
`
l
o
n
g
`
,
 
`
m
e
t
a
t
i
t
l
e
`
,
 
`
m
e
t
a
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
`
,
 
`
m
e
t
a
k
e
y
w
o
r
d
s
`
,
 
`
t
i
m
e
s
t
a
m
p
`
,
 
`
a
p
p
r
o
v
e
d
`
,
 
`
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
`
,
 
`
l
a
s
t
_
c
h
a
n
g
e
d
`
,
 
`
p
e
r
m
i
t
_
n
u
m
b
e
r
`
,
 
`
c
o
m
p
l
e
t
e
d
`
,
 
`
c
a
t
_
i
d
`
)
 
V
A
L
U
E
S

(
1
,
 
'
H
o
t
e
l
 
V
a
l
l
e
'
,
 
'
A
s
h
e
l
d
o
n
 
R
d
'
,
 
'
T
o
r
q
u
a
y
'
,
 
'
1
1
1
3
'
,
 
'
G
B
'
,
 
'
T
Q
1
 
2
Q
S
'
,
 
'
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
'
,
 
'
0
1
0
0
0
 
6
5
4
3
2
1
'
,
 
'
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
e
m
a
i
l
'
,
 
'
,
3
2
,
3
4
,
3
5
,
3
0
,
4
0
,
4
1
,
4
,
7
7
,
4
7
,
'
,
 
'
h
t
t
p
s
:
/
/
w
w
w
.
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
'
,
 
'
M
y
 
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
'
,
 
'
A
n
y
 
t
i
m
e
 
f
r
o
m
 
2
p
m
 
o
n
w
a
r
d
s
'
,
 
'
S
u
r
f
i
n
g
,
 
r
o
c
k
 
c
l
i
m
b
i
n
g
,
 
f
i
s
h
i
n
g
 
&
#
3
8
;
 
l
a
z
i
n
g
 
i
n
 
t
h
e
 
s
u
n
.
'
,
 
'
S
e
c
o
n
d
 
s
t
a
r
 
t
o
 
t
h
e
 
r
i
g
h
t
 
a
n
d
 
s
t
r
a
i
g
h
t
 
o
n
 
t
i
l
l
 
m
o
r
n
i
n
g
.
'
,
 
'
N
o
n
e
 
f
o
r
 
m
i
l
e
s
 
a
n
d
 
m
i
l
e
s
 
a
n
d
 
m
i
l
e
s
.
'
,
 
'
L
o
c
a
l
 
b
u
s
e
s
 
o
n
c
e
 
a
 
d
a
y
,
 
t
a
x
i
s
 
a
n
d
 
i
f
 
y
o
u
&
#
3
9
;
r
e
 
l
u
c
k
y
 
a
 
d
o
n
k
e
y
.
'
,
 
'
R
e
q
u
e
s
t
s
 
f
o
r
 
b
e
d
 
t
y
p
e
 
a
n
d
 
s
m
o
k
i
n
g
 
p
r
e
f
e
r
e
n
c
e
s
 
w
i
l
l
 
b
e
 
s
u
b
m
i
t
t
e
d
 
t
o
 
t
h
e
 
h
o
t
e
l
 
b
u
t
 
a
r
e
 
n
o
t
 
g
u
a
r
a
n
t
e
e
d
.
'
,
 
N
U
L
L
,
 
1
,
 
3
,
 
1
,
 
1
,
 
'
'
,
 
'
5
1
.
5
0
0
6
8
0
0
'
,
 
'
-
0
.
1
4
3
1
7
0
0
'
,
 
N
U
L
L
,
 
N
U
L
L
,
 
N
U
L
L
,
 
C
U
R
R
E
N
T
_
T
I
M
E
S
T
A
M
P
,
 
1
,
 
N
U
L
L
,
 
C
U
R
R
E
N
T
_
T
I
M
E
S
T
A
M
P
,
 
N
U
L
L
,
 
1
,
 
1
)
;

"
;


i
f
 
(
!
d
o
I
n
s
e
r
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
)
 
{

	
$
t
h
i
s
-
>
s
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
'
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
i
n
s
e
r
t
 
s
a
m
p
l
e
 
d
a
t
a
 
i
n
 
t
h
e
 
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
p
r
o
p
e
r
t
y
s
 
t
a
b
l
e
'
,
 
'
d
a
n
g
e
r
'
)
;

}

